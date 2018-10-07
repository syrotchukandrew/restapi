<?php

/*
 * This file is part of the Restapi.
 */

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TiMessageRepository")
 */
class TiMessage
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $clientId;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $url;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $sessionId;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $userId;

    /**
     * One TiMessage has One VirtualState.
     *
     * @ORM\OneToOne(targetEntity="VirtualState", cascade={"persist"})
     * @ORM\JoinColumn(name="virtual_state_id", referencedColumnName="id")
     */
    private $virtualState;

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return null|string
     */
    public function getClientId(): ?string
    {
        return $this->clientId;
    }

    /**
     * @param string $clientId
     *
     * @return TiMessage
     */
    public function setClientId(string $clientId): TiMessage
    {
        $this->clientId = $clientId;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * @param string $url
     *
     * @return TiMessage
     */
    public function setUrl(string $url): TiMessage
    {
        $this->url = $url;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getSessionId(): ?string
    {
        return $this->sessionId;
    }

    /**
     * @param null|string $sessionId
     *
     * @return TiMessage
     */
    public function setSessionId(?string $sessionId): TiMessage
    {
        $this->sessionId = $sessionId;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getUserId(): ?string
    {
        return $this->userId;
    }

    /**
     * @param null|string $userId
     *
     * @return TiMessage
     */
    public function setUserId(?string $userId): TiMessage
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * @return null|VirtualState
     */
    public function getVirtualState(): ?VirtualState
    {
        return $this->virtualState;
    }

    /**
     * @param VirtualState $virtualState
     *
     * @return TiMessage
     */
    public function setVirtualState(VirtualState $virtualState): TiMessage
    {
        $this->virtualState = $virtualState;

        return $this;
    }
}
