<?php namespace Src\Domain\Model\Application;

class Application{

    private $id;

    private $developer_id;

    private $title;

    private $version;

    private $url;

    private $short_description;

    private $license;

    private $thumbnail;

    private $rating;

    private $total_downloads;

    private $compatible;

    public function __construct (
        int $id,
        int $developer_id,
        string $title,
        string $version,
        string $url,
        string $short_description,
        string $license,
        string $thumbnail,
        string $rating,
        string $total_downloads,
        array $compatible
    )
    {
        $this->id = $id;

        $this->developer_id = $developer_id;

        $this->title = $title;

        $this->version = $version;

        $this->url = $url;

        $this->short_description = $short_description;

        $this->license = $license;

        $this->thumbnail = $thumbnail;

        $this->rating = $rating;

        $this->total_downloads = $total_downloads;

        $this->compatible = $compatible;
    }


    /**
     * @return int
     */
    public function id(): int
    {
        return $this->id;
    }


    /**
     * @return int
     */
    public function developerId(): int
    {
        return $this->developer_id;
    }


    /**
     * @return string
     */
    public function title(): string
    {
        return $this->title;
    }


    /**
     * @return string
     */
    public function version(): string
    {
       return $this->version;
    }


    /**
     * @return string
     */
    public function url(): string
    {
       return $this->url;
    }


    /**
     * @return string
     */
    public function short_description(): string
    {
       return $this->short_description;
    }


    /**
     * @return string
     */
    public function license(): string
    {
       return $this->license;
    }


    /**
     * @return string
     */
    public function thumbnail(): string
    {
       return $this->thumbnail;
    }


    /**
     * @return string
     */
    public function rating(): string
    {
       return $this->rating;
    }


    /**
     * @return string
     */
    public function total_downloads(): string
    {
       return $this->total_downloads;
    }


    /**
     * @return array|
     */
    public function compatible(): array
    {
       return $this->compatible;
    }
}