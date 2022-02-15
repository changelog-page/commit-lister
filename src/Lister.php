<?php

declare(strict_types=1);

namespace Changelog\CommitLister;

use Illuminate\Support\Collection;

interface Lister
{
    public function byUser(string $uuid, string $branch, ?array $options): Collection;

    public function byTeam(string $uuid, string $branch, ?array $options): Collection;
}
