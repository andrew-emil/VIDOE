<?php

class PlayLists
{
    private int $playlist_id = 0;
    private string $name  = '';
    private string $description = '';
    private int $user_id;
    private DateTime $creationDate;

    public function setPlaylist_id(int $playlist_id): void
    {
        $this->playlist_id = $playlist_id;
    }
    public function setPlaylist_name(string $playlist_name): void
    {
        $this->name = $playlist_name;
    }
    public function setUser_id(int $id): void
    {
        $this->user_id = $id;
    }
    public function setCreationDate(DateTime $date): void
    {
        $this->creationDate = $date;
    }
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }
    public function getPlaylist_id(): int
    {
        return $this->playlist_id;
    }
    public function getPlaylist_name(): string
    {
        return $this->name;
    }
    public function getUser_id(): int
    {
        return $this->user_id;
    }
    public function getCreationDate(): DateTime
    {
        return $this->creationDate;
    }
    public function getDescription(): string
    {
        return $this->description;
    }
}
