<?php

namespace Database\Seeders;

use App\Models\classes;
use App\Models\section;
use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class ClassesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        classes::factory()
        ->count(10)
        ->sequence(fn($sequence)=>['name'=>'class'.$sequence->index+1])
        ->has(
            section::factory()
            ->count(2)
            ->state(
                new Sequence(
                    ['name' => 'Section A'],
                    ['name' => 'Section B'],
                )
            )
            ->has(
                Student::factory()
                ->count(5)
                ->state(
                    function (array $attributes, Section $section){
                        return ['class_id'=> $section->class_id];
                    }
                )
            )
        )
        ->create();
    }
}
