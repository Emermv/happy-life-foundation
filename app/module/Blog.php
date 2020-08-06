<?php
namespace module;

class Blog extends \core\Module{
	public function __construct(){

        parent::__construct();
    }
	public function index(){
        $this->page(array(
          'posts'=>array(
              array(
                  'title'=>TRY_TITLE,
                  "description"=>BLOG1_DESCRIPTION,
                  "src"=>APP['ROOT']."/app/assets/img/blog/blog-1.jpeg",
                  "id"=>"1"
              ),
              array(
                'title'=>TRY_TITLE,
                "description"=>BLOG2_DESCRIPTION,
                "src"=>APP['ROOT']."/app/assets/img/blog/blog-2.jpeg",
                "id"=>"2"
            ),
          )
        ));
    }

    public function show($id){
       
        $this->page(array(
          'id'=>$id,
          "images"=>array(
    "https://happylife-foundation.org/old/wp-content/uploads/2020/01/WhatsApp-Image-2019-12-30-at-9.57.27-AM-2-1024x1024.jpeg",
"https://happylife-foundation.org/old/wp-content/uploads/2020/01/WhatsApp-Image-2019-12-30-at-9.59.20-PM-1024x1024.jpeg",
"https://happylife-foundation.org/old/wp-content/uploads/2020/01/WhatsApp-Image-2019-12-30-at-9.59.21-PM-1024x1024.jpeg",
"https://happylife-foundation.org/old/wp-content/uploads/2020/01/WhatsApp-Image-2019-12-30-at-9.59.23-PM-1024x1024.jpeg",
"https://happylife-foundation.org/old/wp-content/uploads/2020/01/WhatsApp-Image-2019-12-30-at-9.59.40-PM-1024x1024.jpeg",
"https://happylife-foundation.org/old/wp-content/uploads/2020/01/WhatsApp-Image-2019-12-30-at-9.59.41-PM-1024x1024.jpeg",
"https://happylife-foundation.org/old/wp-content/uploads/2020/01/WhatsApp-Image-2019-12-30-at-9.59.42-PM-1024x1024.jpeg",
"https://happylife-foundation.org/old/wp-content/uploads/2020/01/WhatsApp-Image-2019-12-30-at-9.59.42-PM-1-1024x1024.jpeg",
"https://happylife-foundation.org/old/wp-content/uploads/2020/01/WhatsApp-Image-2019-12-30-at-9.59.43-PM-1024x1024.jpeg",
"https://happylife-foundation.org/old/wp-content/uploads/2020/01/WhatsApp-Image-2019-12-30-at-9.59.43-PM-1-1024x1024.jpeg",
"https://happylife-foundation.org/old/wp-content/uploads/2020/01/WhatsApp-Image-2019-12-30-at-9.59.43-PM-2-1024x1024.jpeg",
"https://happylife-foundation.org/old/wp-content/uploads/2020/01/WhatsApp-Image-2019-12-30-at-9.59.44-PM-1024x1024.jpeg",
"https://happylife-foundation.org/old/wp-content/uploads/2020/01/WhatsApp-Image-2019-12-30-at-9.59.45-PM-1024x1024.jpeg",
"https://happylife-foundation.org/old/wp-content/uploads/2020/01/WhatsApp-Image-2019-12-30-at-9.59.45-PM-1-1024x1024.jpeg",
"https://happylife-foundation.org/old/wp-content/uploads/2020/01/WhatsApp-Image-2019-12-30-at-9.59.46-PM-1024x1024.jpeg",
"https://happylife-foundation.org/old/wp-content/uploads/2020/01/WhatsApp-Image-2019-12-30-at-9.59.46-PM-1-1024x1024.jpeg",
"https://happylife-foundation.org/old/wp-content/uploads/2020/01/WhatsApp-Image-2019-12-30-at-9.59.47-PM-1024x1024.jpeg",
"https://happylife-foundation.org/old/wp-content/uploads/2020/01/WhatsApp-Image-2019-12-30-at-9.59.47-PM-1-1024x1024.jpeg",
"https://happylife-foundation.org/old/wp-content/uploads/2020/01/WhatsApp-Image-2019-12-30-at-9.59.47-PM-2-1024x1024.jpeg",
"https://happylife-foundation.org/old/wp-content/uploads/2020/01/WhatsApp-Image-2019-12-30-at-9.59.47-PM-3-1024x1024.jpeg",
"https://happylife-foundation.org/old/wp-content/uploads/2020/01/WhatsApp-Image-2019-12-30-at-9.59.48-PM-1024x1024.jpeg",
"https://happylife-foundation.org/old/wp-content/uploads/2020/01/WhatsApp-Image-2019-12-30-at-10.01.19-PM-1024x1024.jpeg",
"https://happylife-foundation.org/old/wp-content/uploads/2020/01/WhatsApp-Image-2019-12-30-at-10.01.20-PM-1024x1024.jpeg",
"https://happylife-foundation.org/old/wp-content/uploads/2020/01/WhatsApp-Image-2019-12-30-at-10.01.20-PM-1-1024x1024.jpeg",
"https://happylife-foundation.org/old/wp-content/uploads/2020/01/WhatsApp-Image-2019-12-30-at-10.01.21-PM-1024x1024.jpeg",
"https://happylife-foundation.org/old/wp-content/uploads/2020/01/WhatsApp-Image-2019-12-30-at-10.01.21-PM-1-1024x1024.jpeg",
"https://happylife-foundation.org/old/wp-content/uploads/2020/01/WhatsApp-Image-2019-12-30-at-10.01.22-PM-1024x1024.jpeg",
"https://happylife-foundation.org/old/wp-content/uploads/2020/01/WhatsApp-Image-2019-12-30-at-10.01.23-PM-1024x1024.jpeg",
"https://happylife-foundation.org/old/wp-content/uploads/2020/01/WhatsApp-Image-2019-12-30-at-10.01.23-PM-1-1024x1024.jpeg"
)
        ));
    }

}

 ?>
