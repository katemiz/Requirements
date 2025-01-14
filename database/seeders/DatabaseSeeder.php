<?php

namespace Database\Seeders;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

use App\Models\Company;
use App\Models\Gate;
use App\Models\Project;
use App\Models\User;
use App\Models\Moc;
use App\Models\Poc;
use App\Models\Phase;



// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        Company::create([
            'user_id' => 1,
            'updated_uid' =>1,
            'name' => 'AppCompany',
            'fullname' => 'Generic Company for App'
        ]);




        Company::create([
            'user_id' => 1,
            'updated_uid' =>1,
            'name' => 'Masttech',
            'fullname' => 'Elektromekanik Sistemler Sanayii ve Ticaret AŞ'
        ]);


        // USERS
        $admin = User::create([
            "name" => 'Kılıç Ali',
            "lastname" =>'Temiz',
            "company_id" => 1,
            "email" => 'katemiz@gmail.com',
            "password" => 'password'
        ]);




        $role = Role::create(['name' => 'admin']);
        $cadmin = Role::create(['name' => 'company_admin']);
        $reqeng = Role::create(['name' => 'requirement_engineer']);

        $admin->assignRole('admin');

        $company_admin1->assignRole('company_admin');
        $company_admin1->assignRole('requirement_engineer');

        $company_admin2->assignRole('company_admin');
        $company_admin2->assignRole('requirement_engineer');

        // PROJECTS
        Project::create([
            'updated_uid' => 1,
            'user_id' => 1,
            'company_id' => 1,
            'code' => 'AppProject',
            'title' => 'Generic Project for App'
        ]);




        Project::create([
            'updated_uid' => 1,
            'user_id' => 1,
            'company_id' => 3,
            'code' => 'MTDP',
            'title' => 'Deneme Projesi'
        ]);



        // MOCs
        Moc::create([
            'updated_uid' => 1,
            'user_id' => 1,
            'company_id' => 1,
            'project_id' => 1,
            'endproduct_id' => 0,
            'code' => 'MC 9',
            'name' => 'Equipment Qualification',
            'description' => '<p>Note:</p><p>Equipment Qualification is a process that may include all previous means of compliance:</p>'
        ]);

        
        Moc::create([
            'updated_uid' => 1,
            'user_id' => 1,
            'company_id' => 1,
            'project_id' => 1,
            'endproduct_id' => 0,
            'code' => 'MC 7',
            'name' => 'Design Inspection',
            'description' => '<ul><li>Inspection / Audit Reports</li></ul>'
        ]);

        
        Moc::create([
            'updated_uid' => 1,
            'user_id' => 1,
            'company_id' => 1,
            'project_id' => 1,
            'endproduct_id' => 0,
            'code' => 'MC 6',
            'name' => 'Flight Tests',
            'description' => ''
        ]);

        
        Moc::create([
            'updated_uid' => 1,
            'user_id' => 1,
            'company_id' => 1,
            'project_id' => 1,
            'endproduct_id' => 0,
            'code' => 'MC 5',
            'name' => 'Ground Tests on Related Products',
            'description' => ''
        ]);

        
        Moc::create([
            'updated_uid' => 1,
            'user_id' => 1,
            'company_id' => 1,
            'project_id' => 1,
            'endproduct_id' => 0,
            'code' => 'MC 4',
            'name' => 'Laboratory Tests',
            'description' => ''
        ]);

        
        Moc::create([
            'updated_uid' => 1,
            'user_id' => 1,
            'company_id' => 1,
            'project_id' => 1,
            'endproduct_id' => 0,
            'code' => 'MC 3',
            'name' => 'Safety Assessment',
            'description' => '<ul><li>Safety Analysis:</li></ul>'
        ]);

        
        Moc::create([
            'updated_uid' => 1,
            'user_id' => 1,
            'company_id' => 1,
            'project_id' => 1,
            'endproduct_id' => 0,
            'code' => 'MC 2',
            'name' => 'Calculation / Analysis',
            'description' => '<ul><li>Substantiation Reports</li></ul>'
        ]);

        
        Moc::create([
            'updated_uid' => 1,
            'user_id' => 1,
            'company_id' => 1,
            'project_id' => 1,
            'endproduct_id' => 0,
            'code' => 'MC 1',
            'name' => 'Design Review',
            'description' => '<ul><li>Description</li><li>Drawings</li></ul>'
        ]);

        
        Moc::create([
            'updated_uid' => 1,
            'user_id' => 1,
            'company_id' => 1,
            'project_id' => 1,
            'endproduct_id' => 0,
            'code' => 'MC 0',
            'name' => 'Compliance Statement',
            'description' => '<p>Compliance Statement</p><p>Reference to design change documents</p><p>Election of methods, factors</p><p>Definition</p>'
        ]);

        // PHASES
        Phase::create([
            'updated_uid' => 1,
            'user_id' => 1,
            'company_id' => 1,
            'project_id' => 1,
            'endproduct_id' => 0,
            'code' => 'Pre-Phase A',
            'name' => 'Concept Studies',
            'description' => '<p><strong>Purpose</strong></p><p>To produce a broad spectrum of ideas and alternatives for missions from which new programs/projects can be selected. Determine feasibility of desired system, develop mission concepts, draft system-level requirements, assess performance, cost, and schedule feasibility; identify potential technology needs, and scope.&nbsp;</p><p>&nbsp;</p><p><strong>Typical Outcomes</strong></p><p>Feasible system concepts in the form of simulations, analysis, study reports, models, and mock-ups</p>'
        ]);

        Phase::create([
            'updated_uid' => 1,
            'user_id' => 1,
            'company_id' => 1,
            'project_id' => 1,
            'endproduct_id' => 0,
            'code' => 'Phase A',
            'name' => 'Concept and Technology Development',
            'description' => '<p><strong>Purpose</strong></p><p>To determine the feasibility and desirability of a suggested new system and establish an initial baseline compatibility with NASA’s strategic plans. Develop final mission concept, system-level requirements, needed system technology developments, and program/project technical management plans.&nbsp;</p><p>&nbsp;</p><p><strong>Typical Outcomes</strong></p><p>System concept definition in the form of simulations, analysis, engineering models and mock-ups, and trade study definition</p>'
        ]);

        Phase::create([
            'updated_uid' => 1,
            'user_id' => 1,
            'company_id' => 1,
            'project_id' => 1,
            'endproduct_id' => 0,
            'code' => 'Phase B',
            'name' => 'Preliminary Design and Technology Completion',
            'description' => '<p><strong>Purpose</strong></p><p>To define the project in enough detail to establish an initial baseline capable of meeting mission needs. Develop system structure end product (and enabling product) requirements and generate a preliminary design for each system structure end product.&nbsp;</p><p>&nbsp;</p><p><strong>Typical Outcomes</strong></p><p>End products in the form of mock-ups, trade study results, specification and interface documents, and prototypes</p>'
        ]);

        Phase::create([
            'updated_uid' => 1,
            'user_id' => 1,
            'company_id' => 1,
            'project_id' => 1,
            'endproduct_id' => 0,
            'code' => 'Phase C',
            'name' => 'Final Design and Fabrication',
            'description' => '<p><strong>Purpose</strong></p><p>To complete the detailed design of the system (and its associated subsystems, including its operations systems), fabricate hardware, and code software. Generate final designs for each system structure end product.&nbsp;</p><p>&nbsp;</p><p><strong>Typical Outcomes</strong></p><p>End product detailed designs, end product component fabrication, and software development</p>'
        ]);

        Phase::create([
            'updated_uid' => 1,
            'user_id' => 1,
            'company_id' => 1,
            'project_id' => 1,
            'endproduct_id' => 0,
            'code' => 'Phase D',
            'name' => 'System Assembly, Integration and Test, Launch',
            'description' => '<p><strong>Purpose</strong></p><p>To assemble and integrate the system (hardware, software, and humans), meanwhile developing confidence that it is able to meet the system requirements. Launch and prepare for operations. Perform system end product implementation, assembly, integration and test, and transition to use.&nbsp;</p><p>&nbsp;</p><p><strong>Typical Outcomes</strong></p><p>Operations-ready system end product with supporting related enabling products</p>'
        ]);

        Phase::create([
            'updated_uid' => 1,
            'user_id' => 1,
            'company_id' => 1,
            'project_id' => 1,
            'endproduct_id' => 0,
            'code' => 'Phase E',
            'name' => 'Operations and Sustainment',
            'description' => '<p><strong>Purpose</strong></p><p>To conduct the mission and meet the initially identified need and maintain support for that need. Implement the mission operations plan.&nbsp;</p><p>&nbsp;</p><p><strong>Typical Outcomes</strong></p><p>Desired system</p>'
        ]);

        Phase::create([
            'updated_uid' => 1,
            'user_id' => 1,
            'company_id' => 1,
            'project_id' => 1,
            'endproduct_id' => 0,
            'code' => 'Phase F',
            'name' => 'Closeout',
            'description' => '<p><strong>Purpose</strong></p><p>To implement the systems decommissioning/disposal plan developed in Phase E and perform analyses of the returned data and any returned samples.&nbsp;</p><p>&nbsp;</p><p><strong>Typical Outcomes</strong></p><p>Product closeout</p>'
        ]);



        // GATES
        Gate::create([
            'updated_uid' => 1,
            'user_id' => 1,
            'company_id' => 1,
            'project_id' => 1,
            'endproduct_id' => 0,
            'code' => 'MCR',
            'name' => 'Mission Concept Review',
            'ordering' => 1,
            'purpose' => '<p>The MCR will affirm the mission need and evaluates the proposed objectives and the concept for meeting those objectives.</p>',
            'timing' => '<p>The MCR should be completed prior to entering the concept development phase (Phase A)</p>'
        ]);
    
        
    
        Gate::create([
            'updated_uid' => 1,
            'user_id' => 1,
            'company_id' => 1,
            'project_id' => 1,
            'endproduct_id' => 0,
            'code' => 'SRR',
            'name' => 'System Requirements Review',
            'ordering' => 2,
            'purpose' => '<p>The SRR evaluates the functional and performance requirements defined for the system and the preliminary program or project plan and ensures that the requirements and selected concept will satisfy the mission.</p>',
            'timing' => '<p>The SRR is conducted during the concept development phase (Phase A) and before conducting the SDR or MDR.</p>'
        ]);
    
        
    
        Gate::create([
            'updated_uid' => 1,
            'user_id' => 1,
            'company_id' => 1,
            'project_id' => 1,
            'endproduct_id' => 0,
            'code' => 'MDR / SDR',
            'name' => 'Mission Definition Review / System Definition Review',
            'ordering' => 3,
            'purpose' => '<p>TSometimes called the MDR by robotic projects and SDR for human flight projects, this review evaluates whether the proposed architecture is responsive to the functional and performance requirements and that the requirements have been allocated to all functional elements of the mission/system.</p>',
            'timing' => '<p>The MDR/SDR is conducted during the concept development phase (Phase A) prior to KDP B and the start of preliminary design.</p>'
        ]);
    
        
    
        Gate::create([
            'updated_uid' => 1,
            'user_id' => 1,
            'company_id' => 1,
            'project_id' => 1,
            'endproduct_id' => 0,
            'code' => 'PDR',
            'name' => 'Preliminary Design Review',
            'ordering' => 4,
            'purpose' => '<p>The PDR demonstrates that the preliminary design meets all system requirements with acceptable risk and within the cost and schedule constraints and establishes the basis for proceeding with detailed design. It shows that the correct design options have been selected, interfaces have been identified, and verification methods have been described. The PDR should address and resolve critical, system-wide issues and show that work can begin on detailed design.</p>',
            'timing' => '<p>PDR occurs near the completion of the preliminary design phase (Phase B) as the last review in the Formulation Phase.</p>'
        ]);
    
        
    
        Gate::create([
            'updated_uid' => 1,
            'user_id' => 1,
            'company_id' => 1,
            'project_id' => 1,
            'endproduct_id' => 0,
            'code' => 'CDR',
            'name' => 'Critical Design Review',
            'ordering' => 5,
            'purpose' => '<p>The CDR demonstrates that the maturity of the design is appropriate to support proceeding with full scale fabrication, assembly, integration, and test. CDR determines if the technical effort is on track to complete the system development, meeting mission performance requirements within the identified cost and schedule constraints.</p>',
            'timing' => '<p>CDR occurs during the final design phase (Phase C).</p>'
        ]);
    
        
    
        Gate::create([
            'updated_uid' => 1,
            'user_id' => 1,
            'company_id' => 1,
            'project_id' => 1,
            'endproduct_id' => 0,
            'code' => 'PRR',
            'name' => 'Production Readiness Review',
            'ordering' => 6,
            'purpose' => '<p>A PRR is held for projects developing or acquiring multiple or similar systems greater than three or as determined by the project. The PRR determines the readiness of the system developers to efficiently produce the required number of systems. It ensures that the production plans; fabrication, assembly, and integration-enabling products; and personnel are in place and ready to begin production.</p>',
            'timing' => '<p>PRR occurs during the final design phase (Phase C).</p>'
        ]);
    
        
    
        Gate::create([
            'updated_uid' => 1,
            'user_id' => 1,
            'company_id' => 1,
            'project_id' => 1,
            'endproduct_id' => 0,
            'code' => 'SIR',
            'name' => 'System Integration Review',
            'ordering' => 7,
            'purpose' => '<p>An SIR ensures segments, components, and subsystems are on schedule to be integrated into the system. Integration facilities, support personnel, and integration plans and procedures are on schedule to support integration.</p>',
            'timing' => '<p>SIR occurs at the end of the final design phase (Phase C) and before the systems assembly, integration, and test phase (Phase D) begins.</p>'
        ]);
    
        
    
        Gate::create([
            'updated_uid' => 1,
            'user_id' => 1,
            'company_id' => 1,
            'project_id' => 1,
            'endproduct_id' => 0,
            'code' => 'SAR',
            'name' => 'System Acceptance Review',
            'ordering' => 8,
            'purpose' => '<p>The SAR verifies the completeness of the specific end products in relation to their expected maturity level and assesses compliance to stakeholder expectations. It also ensures that the system has sufficient technical maturity to authorize its shipment to the designated operational facility or launch site</p>',
            'timing' => '<p>--</p>'
        ]);
    
        
    
        Gate::create([
            'updated_uid' => 1,
            'user_id' => 1,
            'company_id' => 1,
            'project_id' => 1,
            'endproduct_id' => 0,
            'code' => 'ORR',
            'name' => 'Operational Readiness Review',
            'ordering' => 9,
            'purpose' => '<p>The ORR examines the actual system characteristics and procedures used in the system or end product’s operation. It ensures that all system and support (flight and ground) hardware, software, personnel, procedures, and user documentation accurately reflect the deployed state of the system.</p>',
            'timing' => '<p>---</p>'
        ]);
    
        
    
        Gate::create([
            'updated_uid' => 1,
            'user_id' => 1,
            'company_id' => 1,
            'project_id' => 1,
            'endproduct_id' => 0,
            'code' => 'FRR',
            'name' => 'Flight Readiness Review',
            'ordering' => 10,
            'purpose' => '<p>The FRR examines tests, demonstrations, analyses, and audits that determine the system’s readiness for a safe and successful flight or launch and for subsequent flight operations. It also ensures that all flight and ground hardware, software, personnel, and procedures are operationally ready</p>',
            'timing' => '<p>---</p>'
        ]);
    
        
    
        Gate::create([
            'updated_uid' => 1,
            'user_id' => 1,
            'company_id' => 1,
            'project_id' => 1,
            'endproduct_id' => 0,
            'code' => 'PLAR',
            'name' => 'Post-Launch Assessment Review ',
            'ordering' => 11,
            'purpose' => '<p>The FRR examines tests, demonstrations, analyses, and audits that determine the system’s readiness for a safe and successful flight or launch and for subsequent flight operations. It also ensures that all flight and ground hardware, software, personnel, and procedures are operationally ready</p>',
            'timing' => '<p>This review is typically held after the early flight operations and initial checkout.</p>'
        ]);
    
        
    
        Gate::create([
            'updated_uid' => 1,
            'user_id' => 1,
            'company_id' => 1,
            'project_id' => 1,
            'endproduct_id' => 0,
            'code' => 'CERR',
            'name' => 'Critical Event Readiness Review ',
            'ordering' => 12,
            'purpose' => '<p>A CERR confirms the project’s readiness to execute the mission’s critical activities during flight operation. These include orbital insertion, rendezvous and docking, re-entry, scientific observations/encounters, etc.</p>',
            'timing' => '<p>--</p>'
        ]);
    
        
    
        Gate::create([
            'updated_uid' => 1,
            'user_id' => 1,
            'company_id' => 1,
            'project_id' => 1,
            'endproduct_id' => 0,
            'code' => 'PFAR',
            'name' => 'Post-Flight Assessment Review',
            'ordering' => 13,
            'purpose' => '<p>The PFAR evaluates the activities from the flight after recovery. The review identifies all anomalies that occurred during the flight and mission and determines the actions necessary to mitigate or resolve the anomalies for future flights.</p>',
            'timing' => '<p>--</p>'
        ]);
    
        
    
        Gate::create([
            'updated_uid' => 1,
            'user_id' => 1,
            'company_id' => 1,
            'project_id' => 1,
            'endproduct_id' => 0,
            'code' => 'DR',
            'name' => 'Decommissioning Review',
            'ordering' => 14,
            'purpose' => '<p>The DR confirms the decision to terminate or decommission the system and assesses the readiness of the system for the safe decommissioning and disposal of system assets.</p>',
            'timing' => '<p>The DR is normally held near the end of routine mission operations upon accomplishment of planned mission objectives. It may be advanced if some unplanned event gives rise to a need to prematurely terminate the mission, or delayed if operational life is extended to permit additional investigations.</p>'
        ]);
    
        
    
        Gate::create([
            'updated_uid' => 1,
            'user_id' => 1,
            'company_id' => 1,
            'project_id' => 1,
            'endproduct_id' => 0,
            'code' => 'DRR',
            'name' => 'Disposal Readiness Review',
            'ordering' => 15,
            'purpose' => '<p>A DRR confirms the readiness for the final disposal of the system assets.</p>',
            'timing' => '<p>The DRR is held as major assets are ready for final disposal.</p>'
        ]);
    

        // POCS
        Poc::create([
            'updated_uid' => 1,
            'user_id' => 1,
            'company_id' => 1,
            'project_id' => 1,
            'endproduct_id' => 0,
            'code' => 'SEMP',
            'name' => 'Systems Engineering Management Plan',
            'description' => ''
        ]);


        Poc::create([
            'updated_uid' => 1,
            'user_id' => 1,
            'company_id' => 1,
            'project_id' => 1,
            'endproduct_id' => 0,
            'code' => 'RM',
            'name' => 'Requirement Management',
            'description' => ''
        ]);

        Poc::create([
            'updated_uid' => 1,
            'user_id' => 1,
            'company_id' => 1,
            'project_id' => 1,
            'endproduct_id' => 0,
            'code' => 'QMP',
            'name' => 'Quality Management Plan',
            'description' => ''
        ]);

        Poc::create([
            'updated_uid' => 1,
            'user_id' => 1,
            'company_id' => 1,
            'project_id' => 1,
            'endproduct_id' => 0,
            'code' => 'RMP',
            'name' => 'Risk Management Plan',
            'description' => ''
        ]);

        Poc::create([
            'updated_uid' => 1,
            'user_id' => 1,
            'company_id' => 1,
            'project_id' => 1,
            'endproduct_id' => 0,
            'code' => 'IMP',
            'name' => 'Interface Management Plan',
            'description' => ''
        ]);

        Poc::create([
            'updated_uid' => 1,
            'user_id' => 1,
            'company_id' => 1,
            'project_id' => 1,
            'endproduct_id' => 0,
            'code' => 'CMP',
            'name' => 'Configuration Management Plan',
            'description' => ''
        ]);

        Poc::create([
            'updated_uid' => 1,
            'user_id' => 1,
            'company_id' => 1,
            'project_id' => 1,
            'endproduct_id' => 0,
            'code' => 'TPM',
            'name' => 'Technical Performance Measurement',
            'description' => ''
        ]);

        Poc::create([
            'updated_uid' => 1,
            'user_id' => 1,
            'company_id' => 1,
            'project_id' => 1,
            'endproduct_id' => 0,
            'code' => 'TMP',
            'name' => 'Test Management Plan',
            'description' => ''
        ]);



    }
}
