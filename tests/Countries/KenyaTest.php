<?php
namespace Spatie\Holidays\Tests\Countries;

use Carbon\CarbonImmutable;
use Spatie\Holidays\Holidays;

it('can calculate kenyan holidays', function () {
    CarbonImmutable::setTestNowAndTimezone('2024-01-01', 'Africa/Nairobi');

    $holidays = Holidays::for(country: 'ke')->get();

    expect($holidays)
        ->toBeArray()
        ->not()->toBeEmpty();

    expect(formatDates($holidays))->toMatchSnapshot();
});
