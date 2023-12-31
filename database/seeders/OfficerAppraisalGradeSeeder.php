<?php

namespace Database\Seeders;

use App\Models\Metadata\OfficerAppraisalGrade;
use Illuminate\Database\Seeder;

class OfficerAppraisalGradeSeeder extends Seeder
{
    public function run(): void
    {
        $grades = [
            'excellent',
            'very good',
            'good',
            'adequate',
            'weak',
            'not graded',
        ];

        foreach ($grades as $grade) {
            OfficerAppraisalGrade::query()->create([
                'name' => $grade,
            ]);
        }
    }
}
