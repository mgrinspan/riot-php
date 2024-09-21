<?php

declare(strict_types=1);

namespace Riot\DTO;

final class SummonerDTO implements DTOInterface
{
    private string $accountId;

    private int $profileIconId;

    private int $revisionDate;

    private string $id;

    private string $puuid;

    private int $summonerLevel;

    public function __construct(
        string $accountId,
        int $profileIconId,
        int $revisionDate,
        string $id,
        string $puuid,
        int $summonerLevel
    ) {
        $this->accountId = $accountId;
        $this->profileIconId = $profileIconId;
        $this->revisionDate = $revisionDate;
        $this->id = $id;
        $this->puuid = $puuid;
        $this->summonerLevel = $summonerLevel;
    }

    public function getAccountId(): string
    {
        return $this->accountId;
    }

    public function getProfileIconId(): int
    {
        return $this->profileIconId;
    }

    public function getRevisionDate(): int
    {
        return $this->revisionDate;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getPuuid(): string
    {
        return $this->puuid;
    }

    public function getSummonerLevel(): int
    {
        return $this->summonerLevel;
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function createFromArray(array $data): SummonerDTO
    {
        return new self(
            $data['accountId'],
            $data['profileIconId'],
            $data['revisionDate'],
            $data['id'],
            $data['puuid'],
            $data['summonerLevel'],
        );
    }
}
