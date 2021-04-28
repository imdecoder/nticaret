<?php

    namespace App\Controllers\Backend;

    use \App\Controllers\BaseController;
    use App\Models\ImageModel;
    use App\Entities\ImageEntity;

    class Images extends BaseController
    {
        protected $imageModel;
        protected $imageEntity;

        public function __construct()
        {
            $this->imageModel = new ImageModel();
            $this->imageEntity = new ImageEntity();
        }

        public function singleImagePickerModal()
        {
            $srcID = $this->request->getGet('src');
            $inputID = $this->request->getGet('input');

            return view('admin/pages/images/picker/single', [
                'srcID' => $srcID,
                'inputID' => $inputID
            ]);
        }

        public function multipleImagePickerModal()
        {
            $area = $this->request->getGet('area');
            $inputName = $this->request->getGet('input');

            return view('admin/pages/images/picker/multiple', [
                'area' => $area,
                'inputName' => $inputName
            ]);
        }

        public function upload()
        {
            helper(['text', 'inflector']);

            $file = $this->request->getFile('file');
            $fileName = convert_accented_characters(underscore($file->getName()));

            if (!$this->validation->run(['file' => $file], 'imageUpload'))
            {
                return $this->response->setJSON([
                    'status' => false,
                    'message' => $this->validation->getErrors()
                ]);
            }

            $file->move(ROOTPATH . UPLOAD_FOLDER_PATH, $fileName);

            if (!$file->hasMoved())
            {
                return $this->response->setJSON([
                    'status' => false,
                    'message' => 'Resim yüklenirken bir hata oluştu.'
                ]);
            }

            $slug = explode('.', $file->getName());

            $this->imageEntity->setName($file->getClientName());
            $this->imageEntity->setSlug($slug[0]);
            $this->imageEntity->setURL($file->getName());
            $this->imageEntity->setSize($file->getSize());
            $this->imageEntity->setType($file->getClientExtension());

            $insert = $this->imageModel->insert($this->imageEntity);

            if ($this->imageModel->errors())
            {
                return $this->response->setJSON([
                    'status' => false,
                    'message' => 'Bir hata oluştu ve resim yüklenemedi.'
                ]);
            }

            $this->manipulation($file);

            return $this->response->setJSON([
                'status' => true,
                'id' => $insert,
                'src' => $this->imageEntity->getURL('187x134')
            ]);
        }

        private function manipulation($file)
        {
            $manipulation = \Config\Services::image();

            $thumbnail = config('settings')->thumbnail;
            $imagePath = ROOTPATH . UPLOAD_FOLDER_PATH . $file->getName();

            foreach ($thumbnail as $key => $value)
            {
                $manipulation->withFile($imagePath);

                $nameExp = explode('.', $file->getName());
                $name = $nameExp[0];
                $path = ROOTPATH . UPLOAD_FOLDER_PATH . $name . '-' . $value . '.' . $file->getClientExtension();

                $sizeExp = explode('x', $value);
                $width = $sizeExp[0];
                $height = $sizeExp[1];

                $manipulation->fit($width, $height, 'center');
                $manipulation->save($path);
            }

            if (config('settings')->imageCompress != 0)
            {
                $manipulation->withFile($imagePath);
                $manipulation->save($imagePath, config('settings')->imageCompress);
            }

            $watermark = config('settings')->watermark;

            if ($watermark['status'])
            {
                $manipulation->withFile($imagePath);
                $manipulation->text($watermark['text'], [
                    'color' => $watermark['color'],
                    'opacity' => $watermark['opacity'],
                    'withShadow' => $watermark['withShadow'],
                    'fontSize' => $watermark['fontSize'],
                    'hAlign' => $watermark['hAlign'],
                    'vAlign' => $watermark['vAlign']
                ]);

                $manipulation->save($imagePath);
            }
        }
    }
