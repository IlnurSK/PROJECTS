<?php

//test('example', function () {
//    expect(true)->toBeFalse();
//});

it('belongs to an employer', function () {
    // Arrange (Организовать)
    $employer = \App\Models\Employer::factory()->create();

    $job = \App\Models\Job::factory()->create([
        'employer_id' => $employer->id,
    ]);

    // Act (Действовать) и Assert (Утверждать)
    expect($job->employer->is($employer))->toBeTrue();
});

it('can have tags', function () {
    // AAA
    $job = \App\Models\Job::factory()->create();

    $job->tag('Frontend');

    expect($job->tags)->toHaveCount(1);

});
