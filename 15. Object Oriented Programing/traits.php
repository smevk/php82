<?php
trait TimestampableTrait
{
    protected $createdAt;
    protected $updatedAt;

    public function setCreatedAt($timestamp)
    {
        $this->createdAt = $timestamp;
    }

    public function setUpdatedAt($timestamp)
    {
        $this->updatedAt = $timestamp;
    }

    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }
}

class Post
{
    use TimestampableTrait;
}

$post = new Post();
$post->setCreatedAt(time());
$post->setUpdatedAt(time());

echo "Created at: " . $post->getCreatedAt() . PHP_EOL;
echo "Updated at: " . $post->getUpdatedAt() . PHP_EOL;