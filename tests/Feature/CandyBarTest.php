<?php

namespace Tests\Feature;

use App\Models\CandyBar;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

it('shows all candy bars', function () {
    CandyBar::factory()->count(10)->create();

   $this->getJson('/api/candybars')->assertStatus(200)->assertJsonCount(10);
});
