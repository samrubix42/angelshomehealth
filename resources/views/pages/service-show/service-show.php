<?php

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

new #[Layout('layouts::app')] #[Title('Service Details | Angels Home Health of Florida')] class extends Component
{
    public string $slug = 'skilled-nursing';

    // Quick Inquiry Form State
    public string $name = '';

    public string $phone = '';

    public string $email = '';

    public string $notes = '';

    public bool $formSubmitted = false;

    public function mount(?string $slug = null): void
    {
        if ($slug) {
            $this->slug = $slug;
        }
    }

    public function submitInquiry(): void
    {
        $this->validate([
            'name' => 'required|min:2',
            'phone' => 'required|min:7',
            'email' => 'required|email',
        ]);

        $this->formSubmitted = true;
    }

    public function getServiceDataProperty(): array
    {
        $services = [
            'skilled-nursing' => [
                'title' => 'Skilled Nursing & Rehabilitation',
                'category' => 'Medical Clinical Care',
                'badge' => 'RN & LPN Supervised',
                'subtitle' => 'Comprehensive clinical nursing care, surgical recovery, wound management, and medication administration in the comfort of your home.',
                'image' => asset('images/service_wound_nursing.jpg'),
                'coverage' => 'Medicare & Most Private Insurance Covered',
                'availability' => '24/7 On-Call Nursing',
                'duration' => 'Customized Care Plan',
                'faqs' => [
                    ['q' => 'What is included in home skilled nursing care?', 'a' => 'Registered Nurses provide wound management, IV therapy, post-op care, catheter changes, lab draws, and physician-guided treatment plans.'],
                    ['q' => 'Is home nursing covered by Medicare?', 'a' => 'Yes, Medicare Part A & B cover 100% of eligible skilled nursing visits prescribed by your primary physician.'],
                    ['q' => 'How quickly can a nurse start after discharge?', 'a' => 'We coordinate directly with hospital discharge planners to conduct initial assessments within 24 to 48 hours.'],
                ],
                'tinymce_content' => '
                    <h2>Expert Clinical Nursing in Mount Dora & Across Florida</h2>
                    <p>When recovering from surgery, managing a complex illness, or requiring specialized clinical treatments, returning home shouldn\'t mean sacrificing hospital-level healthcare standards. <strong>Angels Home Health of Florida</strong> delivers licensed Registered Nurses (RNs) and Licensed Practical Nurses (LPNs) directly to your home.</p>
                    
                    <div class="callout-box">
                        <div class="callout-box-title">
                            <i class="ri-shield-cross-fill"></i>
                            <span>ACHC Accredited Clinical Excellence</span>
                        </div>
                        <p>Our nursing staff undergoes rigorous background checks and continuous training in advanced wound care modalities, cardiac protocol, and infection control, ensuring safety and optimal patient outcomes.</p>
                    </div>

                    <h3>Clinical Specialties & Services Included</h3>
                    <p>Our skilled nursing team collaborates closely with your attending physician to execute a personalized plan of care tailored to your diagnosis:</p>
                    
                    <ul>
                        <li><strong>Advanced Wound & Surgical Care:</strong> Negative pressure therapy (Wound VAC), dressing changes, incision monitoring, and stoma care.</li>
                        <li><strong>Intravenous (IV) Therapy & Injections:</strong> Administration of antibiotics, pain management protocols, hydration, and central line management (PICC).</li>
                        <li><strong>Medication Reconciliation & Education:</strong> Weekly pillbox organization, dosage tracking, side-effect evaluation, and prescription sync.</li>
                        <li><strong>Cardiopulmonary & Diabetic Management:</strong> Vital sign tracking, blood glucose monitoring, insulin adjustments, and oxygen therapy management.</li>
                        <li><strong>Post-Acute Hospital Discharge Oversight:</strong> Smooth transition planning to prevent emergency room readmissions.</li>
                    </ul>

                    <blockquote>
                        <p>"Our objective is to restore independence, alleviate patient distress, and empower family caregivers through compassionate, evidence-based nursing care."</p>
                        <cite>— Director of Nursing Services, Angels Home Health</cite>
                    </blockquote>

                    <h3>Service Level & Protocol Matrix</h3>
                    <p>Compare our structured clinical interventions designed for home-bound patients:</p>

                    <table>
                        <thead>
                            <tr>
                                <th>Clinical Service</th>
                                <th>Qualified Provider</th>
                                <th>Typical Frequency</th>
                                <th>Primary Objective</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Wound VAC & Complex Dressing</td>
                                <td>Certified RN / Wound Specialist</td>
                                <td>2 - 5x Weekly</td>
                                <td>Accelerated tissue healing</td>
                            </tr>
                            <tr>
                                <td>IV Infusion & Antibiotics</td>
                                <td>Infusion Trained RN</td>
                                <td>Daily / Scheduled</td>
                                <td>Infection resolution</td>
                            </tr>
                            <tr>
                                <td>Post-Op Clinical Evaluation</td>
                                <td>Registered Nurse (RN)</td>
                                <td>1 - 3x Weekly</td>
                                <td>Surgical complication prevention</td>
                            </tr>
                            <tr>
                                <td>Chronic Disease Management</td>
                                <td>RN / LPN Team</td>
                                <td>Weekly / Bi-weekly</td>
                                <td>Symptom stability & education</td>
                            </tr>
                        </tbody>
                    </table>

                    <h3>Step-by-Step Care Initiation</h3>
                    <ol>
                        <li><strong>Physician Referral & Orders:</strong> We contact your doctor to obtain clinical orders and medical necessity documentation.</li>
                        <li><strong>In-Home Clinical Assessment:</strong> A senior RN visits your residence within 24-48 hours to evaluate your condition and home safety.</li>
                        <li><strong>Personalized Care Plan Execution:</strong> Nursing visits begin immediately according to your physician\'s directives.</li>
                        <li><strong>Regular Progress Reporting:</strong> Continuous updates sent to your medical doctor and family caregiver.</li>
                    </ol>
                ',
            ],
            'physical-therapy' => [
                'title' => 'Physical & Occupational Therapy',
                'category' => 'Rehabilitation & Mobility',
                'badge' => 'Licensed Physical Therapists',
                'subtitle' => 'Restoring strength, balance, mobility, and independence through customized physical and occupational rehabilitation programs at home.',
                'image' => asset('images/service_physical_therapy.jpg'),
                'coverage' => 'Medicare & Private Insurance Accepted',
                'availability' => 'Flexible Scheduling',
                'duration' => '4 to 12 Week Programs',
                'faqs' => [
                    ['q' => 'What is the goal of in-home physical therapy?', 'a' => 'To improve mobility, build leg and core strength, reduce fall risk, and help patients safely navigate their home environments.'],
                    ['q' => 'Do I need special exercise equipment at home?', 'a' => 'No! Our physical therapists bring resistance bands, balance equipment, and adapt techniques to your home layout.'],
                ],
                'tinymce_content' => '
                    <h2>Regain Mobility and Independence at Home</h2>
                    <p>Recovering from a joint replacement, stroke, fall, or progressive mobility decline can feel overwhelming. <strong>Angels Home Health</strong> brings licensed Physical Therapists (PTs) and Occupational Therapists (OTs) directly to your living room to help you walk with confidence and perform daily activities safely.</p>
                    
                    <div class="callout-box">
                        <div class="callout-box-title">
                            <i class="ri-walk-fill"></i>
                            <span>Comprehensive Fall Prevention Standard</span>
                        </div>
                        <p>Every therapy patient receives a 25-point home environmental hazard evaluation to eliminate trip risks, install safety grab bars, and optimize lighting.</p>
                    </div>

                    <h3>Core Rehabilitation Programs</h3>
                    <ul>
                        <li><strong>Gait Training & Balance Rehabilitation:</strong> Target unsteady walking, vestibular dizziness, and posture alignment.</li>
                        <li><strong>Post-Surgical Joint Rehab:</strong> Specialized protocols following knee, hip, shoulder, or spinal surgeries.</li>
                        <li><strong>Occupational Living Skills (ADLs):</strong> Training for bathing, dressing, cooking, and adaptive utensil use.</li>
                        <li><strong>Neurological Rehabilitation:</strong> Tailored exercises for Parkinson\'s disease, stroke recovery, and MS support.</li>
                    </ul>

                    <blockquote>
                        <p>"Home-based therapy is often more effective than outpatient clinics because patients train in the exact environment where they live and move daily."</p>
                        <cite>— Lead Physical Therapist, Angels Home Health</cite>
                    </blockquote>
                ',
            ],
            'behavioral-health' => [
                'title' => 'Behavioral Health Services',
                'category' => 'Mental Wellness',
                'badge' => 'Psychiatric RN Team',
                'subtitle' => 'Specialized in-home mental health nursing, coping strategies, depression management, and emotional support for seniors and post-acute patients.',
                'image' => asset('images/service_cardiac_monitoring.jpg'),
                'coverage' => 'Medicare Covered',
                'availability' => 'Mon - Fri Support',
                'duration' => 'Individualized Care',
                'faqs' => [
                    ['q' => 'Who benefits from home behavioral health care?', 'a' => 'Seniors dealing with anxiety, depression, cognitive decline, memory impairment, or emotional distress following severe illness.'],
                ],
                'tinymce_content' => '
                    <h2>Comprehensive Psychiatric & Behavioral Support</h2>
                    <p>Mental wellness is deeply tied to physical health. Our behavioral health nurses provide compassionate care, medication management, and supportive counseling in a private, familiar setting.</p>
                    
                    <h3>Behavioral Nursing Interventions</h3>
                    <ul>
                        <li><strong>Psychiatric Assessments:</strong> Clinical evaluations of mood, memory, orientation, and behavioral changes.</li>
                        <li><strong>Copoint & Family Support:</strong> Guidance for family caregivers coping with behavioral shifts in loved ones.</li>
                        <li><strong>Medication Management:</strong> Strict oversight of psychotropic prescriptions and adherence.</li>
                    </ul>
                ',
            ],
            'chronic-disease-management' => [
                'title' => 'Chronic Disease Management',
                'category' => 'Specialized Clinical Care',
                'badge' => 'Disease Prevention Protocol',
                'subtitle' => 'Expert management for CHF, COPD, Diabetes, Hypertension, and Kidney Disease to minimize hospitalizations and maximize quality of life.',
                'image' => asset('images/service_wound_nursing.jpg'),
                'coverage' => 'Full Medicare Coverage',
                'availability' => 'Ongoing Clinical Care',
                'duration' => 'Long-Term Support',
                'faqs' => [
                    ['q' => 'How does disease management prevent hospital stays?', 'a' => 'By daily tracking of vital signs, early symptom detection, diet adjustments, and direct communication with prescribing doctors.'],
                ],
                'tinymce_content' => '
                    <h2>Proactive Monitoring for Long-Term Conditions</h2>
                    <p>Managing chronic conditions like Congestive Heart Failure (CHF), Chronic Obstructive Pulmonary Disease (COPD), or Diabetes requires constant vigilance. Our clinicians create a structured routine that keeps symptoms under control.</p>

                    <h3>Conditions We Specialize In</h3>
                    <ul>
                        <li><strong>Congestive Heart Failure (CHF):</strong> Daily weight tracking, fluid balance monitoring, and low-sodium nutritional guidance.</li>
                        <li><strong>COPD & Respiratory Care:</strong> Oxygen therapy monitoring, pulse oximetry tracking, and breathing retraining exercises.</li>
                        <li><strong>Diabetes Management:</strong> Blood sugar tracking, dietary planning, and diabetic foot wound prevention.</li>
                    </ul>
                ',
            ],
            'memory-care' => [
                'title' => "Alzheimer's & Memory Care Support",
                'category' => 'Dementia & Cognitive Support',
                'badge' => 'Dementia Care Certified',
                'subtitle' => 'Compassionate, structured care for individuals living with Alzheimer\'s disease, dementia, and memory loss in the comfort of home.',
                'image' => asset('images/service_physical_therapy.jpg'),
                'coverage' => 'Medicare & Private Pay',
                'availability' => 'Custom Shift Care',
                'duration' => 'Flexible Support',
                'faqs' => [
                    ['q' => 'Can dementia patients stay safely at home?', 'a' => 'Yes! With structured memory care routines, home safety modifications, and trained caregivers, seniors can live comfortably at home.'],
                ],
                'tinymce_content' => '
                    <h2>Dignified In-Home Memory Care</h2>
                    <p>Living with dementia or Alzheimer\'s disease presents unique challenges for families. Our specialized caregivers provide gentle stimulation, memory exercises, routine maintenance, and safety supervision.</p>

                    <h3>Our Memory Care Approach</h3>
                    <ul>
                        <li><strong>Structured Daily Routines:</strong> Calming schedules that reduce agitation and confusion.</li>
                        <li><strong>Cognitive Stimulation:</strong> Memory games, music therapy, and recall exercises.</li>
                        <li><strong>Respite for Family Caregivers:</strong> Reliable relief so family members can rest with peace of mind.</li>
                    </ul>
                ',
            ],
            'personal-care' => [
                'title' => 'Personal Care & Daily Living Assistance',
                'category' => 'Home Health Aide (HHA)',
                'badge' => 'Certified HHAs & CNAs',
                'subtitle' => 'Assistance with bathing, dressing, meal preparation, companionship, light housekeeping, and personal hygiene.',
                'image' => asset('images/service_cardiac_monitoring.jpg'),
                'coverage' => 'Long-Term Care Insurance & Private Pay',
                'availability' => 'Flexible Hours & Shifts',
                'duration' => 'Ongoing',
                'faqs' => [
                    ['q' => 'What duties do Home Health Aides perform?', 'a' => 'Bathing assistance, mobility support, light housekeeping, meal preparation, medication reminders, and friendly companionship.'],
                ],
                'tinymce_content' => '
                    <h2>Compassionate Personal Support Services</h2>
                    <p>Maintaining personal hygiene and daily tasks is essential for dignity and well-being. Our Certified Nursing Assistants (CNAs) and Home Health Aides (HHAs) treat every patient like family.</p>

                    <h3>Personal Assistance Services</h3>
                    <ul>
                        <li><strong>Bathing & Grooming:</strong> Safe, gentle assistance with showers, hair care, shaving, and dressing.</li>
                        <li><strong>Nutritional Support:</strong> Healthy meal preparation aligned with dietary requirements.</li>
                        <li><strong>Companionship & Light Housekeeping:</strong> Maintaining a clean, pleasant home environment.</li>
                    </ul>
                ',
            ],
        ];

        return $services[$this->slug] ?? $services['skilled-nursing'];
    }
};
