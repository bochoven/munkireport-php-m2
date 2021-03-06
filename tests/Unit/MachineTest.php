<?php
namespace Tests\Unit;

use Mr\MachineGroup;
use Mr\ReportData;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use Mr\Machine;

class MachineTest extends TestCase
{
    use DatabaseTransactions;

    private $machine;
    private $reportData;
    private $machineGroupValues;

    public function setUp() {
        parent::setUp();
        
        $this->machine = factory(Machine::class)->create();
        $this->reportData = factory(ReportData::class)->create([
            'serial_number' => $this->machine->serial_number,
            'machine_group' => 99,
        ]);
        
        $this->machineGroupValues = MachineGroup::createWithParameters(99, 'TestMachineGroup');
    }

    public function testMachineReportDataRelationship() {
        $reportData = $this->machine->reportData()->get();
        $this->assertNotEmpty($reportData);
    }

    public function testMachineGroupKeyValsRelationship() {
        $mgQuery = $this->machine->machineGroupKeyVals()->getQuery()->toSql();
        $mgValues = $this->machine->machineGroupKeyVals()->get();
        $this->assertNotEmpty($mgValues);
    }
}
