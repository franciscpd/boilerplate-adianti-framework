<?php


use Phinx\Seed\AbstractSeed;

class SystemGroupProgramSeeder extends AbstractSeed
{
    public function run()
    {
        $data = [
            ['system_group_id' => 1, 'system_program_id' => 1],
            ['system_group_id' => 1, 'system_program_id' => 2],
            ['system_group_id' => 1, 'system_program_id' => 3],
            ['system_group_id' => 1, 'system_program_id' => 4],
            ['system_group_id' => 1, 'system_program_id' => 5],
            ['system_group_id' => 1, 'system_program_id' => 6],
            ['system_group_id' => 2, 'system_program_id' => 7],
            ['system_group_id' => 1, 'system_program_id' => 8],
            ['system_group_id' => 1, 'system_program_id' => 9],            
            ['system_group_id' => 2, 'system_program_id' => 10],
            ['system_group_id' => 2, 'system_program_id' => 11],
            ['system_group_id' => 2, 'system_program_id' => 12],            
            ['system_group_id' => 2, 'system_program_id' => 13],
            ['system_group_id' => 1, 'system_program_id' => 14],
            ['system_group_id' => 1, 'system_program_id' => 15],
            ['system_group_id' => 2, 'system_program_id' => 16],
            ['system_group_id' => 2, 'system_program_id' => 17],
            ['system_group_id' => 2, 'system_program_id' => 18],
            ['system_group_id' => 2, 'system_program_id' => 19],
            ['system_group_id' => 2, 'system_program_id' => 20],
            ['system_group_id' => 1, 'system_program_id' => 21],
            ['system_group_id' => 2, 'system_program_id' => 22],
            ['system_group_id' => 2, 'system_program_id' => 23],
            ['system_group_id' => 2, 'system_program_id' => 24],            
            ['system_group_id' => 2, 'system_program_id' => 25],
            ['system_group_id' => 1, 'system_program_id' => 26],
            ['system_group_id' => 1, 'system_program_id' => 27],
            ['system_group_id' => 1, 'system_program_id' => 28],
            ['system_group_id' => 1, 'system_program_id' => 29],
            ['system_group_id' => 2, 'system_program_id' => 30],            
            ['system_group_id' => 1, 'system_program_id' => 31],
            ['system_group_id' => 1, 'system_program_id' => 32],
            ['system_group_id' => 1, 'system_program_id' => 33],
            ['system_group_id' => 1, 'system_program_id' => 34],
            ['system_group_id' => 1, 'system_program_id' => 35],
            ['system_group_id' => 1, 'system_program_id' => 36],
            ['system_group_id' => 1, 'system_program_id' => 37],
            ['system_group_id' => 1, 'system_program_id' => 38],
            ['system_group_id' => 1, 'system_program_id' => 39],
            ['system_group_id' => 1, 'system_program_id' => 40],
        ];
        
        $this->insert('system_group_program', $data);
    }
}
