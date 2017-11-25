<?php
class Asset implements \JsonSerializable {
    protected $id;
    protected $id_gallery;
    protected $id_user;
    protected $title;
    protected $content_type;
    protected $path;

    // public function __constructor($id, $id_gallery, $id_user, $title, $content_type) {
    //     $this->id = $id;
    //     $this->id_gallery = $id_gallery;
    //     $this->id_user = $id_user;
    //     $this->title = $title;
    //     $this->content_type = $content_type;
    // }

    public function jsonSerialize() {
        
        $vars = get_object_vars($this);
        return $vars;
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function getContentType() {
        return $this->content_type;
    }


    /**
     * Undocumented function
     *
     * @return void
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function getIdGallery() {
        return $this->id_gallery;
    }

    public function getUserId() {
        return $this->id_user;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getPath() {
        return $this->path;
    }

}
?>