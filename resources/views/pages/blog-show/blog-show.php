<?php

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

new #[Layout('layouts::app')] #[Title('Blog Article | Angels Home Health of Florida')] class extends Component
{
    public string $slug = '5-essential-benefits-of-in-home-skilled-nursing-post-surgery';

    public bool $isSaved = false;

    public function mount(?string $slug = null): void
    {
        if ($slug) {
            $this->slug = $slug;
        }
    }

    public function toggleSave(): void
    {
        $this->isSaved = ! $this->isSaved;
    }

    public function getPostDataProperty(): array
    {
        $posts = [
            '5-essential-benefits-of-in-home-skilled-nursing-post-surgery' => [
                'title' => '5 Essential Benefits of In-Home Skilled Nursing Post-Surgery',
                'category' => 'Skilled Nursing',
                'date' => 'Sep 18, 2026',
                'read_time' => '6 min read',
                'author' => 'Medical Clinical Team',
                'author_role' => 'RN & Post-Acute Clinical Specialist',
                'author_avatar' => 'RN',
                'image' => 'https://images.unsplash.com/photo-1576765608535-5f04d1e3f289?q=80&w=1200&auto=format&fit=crop',
                'excerpt' => 'Recovering from surgery at home requires specialized clinical oversight. Discover how registered nurses provide wound care, IV therapy, and medication management to accelerate recovery and prevent hospital readmissions.',
                'tags' => ['SkilledNursing', 'PostOpCare', 'MountDoraHealth', 'Rehabilitation'],
                'tinymce_content' => '
                    <p class="lead">Undergoing major surgery—whether a joint replacement, cardiac procedure, or abdominal operation—is only the first step toward recovery. The quality of care you receive during the post-acute recovery window at home determines how quickly and safely you regain your strength.</p>

                    <div class="callout-box">
                        <div class="callout-box-title">
                            <i class="ri-lightbulb-fill"></i>
                            <span>Key Takeaway for Families</span>
                        </div>
                        <p>Studies consistently demonstrate that post-surgical patients receiving physician-directed in-home skilled nursing experience a <strong>42% lower rate of hospital readmission</strong> compared to patients discharged without clinical home health support.</p>
                    </div>

                    <h2>1. Professional Wound & Surgical Site Management</h2>
                    <p>Surgical incisions carry inherent risks of infection if not monitored and cleaned properly. Registered Nurses (RNs) are trained to identify subtle early warning signs of complications, such as localized redness, unusual drainage, or delayed tissue granulation.</p>
                    
                    <ul>
                        <li><strong>Sterile Dressing Changes:</strong> Utilizing advanced wound care products and negative pressure wound therapy (Wound VAC) when prescribed.</li>
                        <li><strong>Suture & Staple Removal:</strong> Performed safely in your home under your physician\'s explicit orders.</li>
                        <li><strong>Infection Control:</strong> Maintaining strict aseptic technique to prevent hospital-acquired pathogens.</li>
                    </ul>

                    <h2>2. Safe & Precise Medication Administration</h2>
                    <p>Post-operative regimens frequently involve complex combinations of pain management medications, blood thinners (anticoagulants), antibiotics, and pre-existing daily prescriptions. Managing these doses independently while groggy or in pain can easily lead to dangerous drug interactions or missed doses.</p>

                    <blockquote>
                        <p>"Medication reconciliation performed by an RN within 24 hours of hospital discharge is the single most effective barrier against accidental overdose and drug-to-drug contraindications."</p>
                        <cite>— Director of Clinical Quality, Angels Home Health</cite>
                    </blockquote>

                    <h2>3. Hospital vs In-Home Recovery Comparison</h2>
                    <p>Understanding the advantages of skilled home nursing versus staying unmonitored at home:</p>

                    <table>
                        <thead>
                            <tr>
                                <th>Recovery Factor</th>
                                <th>Unmonitored Home Recovery</th>
                                <th>Angels Skilled Nursing at Home</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Wound Inspection</td>
                                <td>Self-evaluation (risk of delay)</td>
                                <td>RN inspection every visit</td>
                            </tr>
                            <tr>
                                <td>Pain Control</td>
                                <td>High confusion risk</td>
                                <td>Structured dosage schedule & tracking</td>
                            </tr>
                            <tr>
                                <td>Readmission Prevention</td>
                                <td>High risk (30-40%)</td>
                                <td>Significantly reduced (< 8%)</td>
                            </tr>
                            <tr>
                                <td>Physician Coordination</td>
                                <td>Left to patient/family</td>
                                <td>Direct RN-to-Doctor progress reports</td>
                            </tr>
                        </tbody>
                    </table>

                    <h2>4. Early Intervention & Vital Sign Surveillance</h2>
                    <p>Post-surgical complications like deep vein thrombosis (DVT), pulmonary embolism, fluid overload, or sepsis can escalate rapidly. In-home nurses monitor vital signs—including blood pressure, oxygen saturation, heart rate, temperature, and surgical site edema—at every single visit.</p>

                    <ol>
                        <li><strong>Baseline Vital Assessment:</strong> Establishing baseline readings on day 1 post-discharge.</li>
                        <li><strong>Physician Tele-consults:</strong> Immediate phone or digital escalation to your surgeon if anomalies arise.</li>
                        <li><strong>Lab Specimen Collection:</strong> Blood draws (like PT/INR for blood thinners) conducted at your bedside.</li>
                    </ol>

                    <h2>5. Emotional Reassurance & Family Caregiver Guidance</h2>
                    <p>Surgery recovery impacts the whole family. Having a trusted medical professional guiding your family offers immense peace of mind, teaching family members how to safely assist with transfers, hygiene, and nutrition without causing injury or strain.</p>

                    <div class="callout-box">
                        <div class="callout-box-title">
                            <i class="ri-heart-pulse-fill"></i>
                            <span>How Angels Home Health Can Help Today</span>
                        </div>
                        <p>If you or a loved one have an upcoming surgery scheduled in Lake, Orange, Seminoe, or Volusia County, coordinate with your surgeon to request <strong>Angels Home Health of Florida</strong> as your preferred Medicare-certified home health provider.</p>
                    </div>
                ',
            ],
            'understanding-alzheimers-care-at-home' => [
                'title' => "Understanding Alzheimer's & Dementia Care at Home",
                'category' => 'Memory Support',
                'date' => 'Sep 12, 2026',
                'read_time' => '8 min read',
                'author' => 'Memory Care Team',
                'author_role' => 'Dementia & Cognitive Specialist',
                'author_avatar' => 'MC',
                'image' => 'https://images.unsplash.com/photo-1584515979956-d9f6e5d09982?q=80&w=1200&auto=format&fit=crop',
                'excerpt' => 'Learn actionable strategies for family caregivers managing memory loss, behavioral shifts, and home safety for loved ones with Alzheimer\'s disease.',
                'tags' => ['Alzheimers', 'MemoryCare', 'DementiaSupport', 'SeniorCare'],
                'tinymce_content' => '
                    <p class="lead">Caring for a family member with Alzheimer\'s or dementia is a journey of profound love, but it also presents unique emotional and practical challenges. Creating a safe, structured, and soothing home environment is essential for preserving quality of life.</p>
                    
                    <h2>Creating a Safe Home Environment</h2>
                    <p>Safety is the top priority for memory care. Minor modifications around the house can prevent falls, wandering, and accidental injury.</p>

                    <ul>
                        <li><strong>Secure External Doors:</strong> Install unobtrusive smart locks or door alarms to notify caregivers if a loved one wanders.</li>
                        <li><strong>Clear Walkways:</strong> Remove loose rugs, clutter, and low coffee tables that pose tripping hazards.</li>
                        <li><strong>High Contrast Lighting:</strong> Use bright nightlights in hallways and bathrooms to reduce evening confusion (sundowning).</li>
                    </ul>

                    <blockquote>
                        <p>"Routine and familiarity bring comfort to individuals with cognitive decline. Consistent schedules reduce anxiety and promote emotional well-being."</p>
                        <cite>— Memory Care Coordinator, Angels Home Health</cite>
                    </blockquote>
                ',
            ],
            'top-10-fall-prevention-tips-for-seniors' => [
                'title' => 'Top 10 Fall Prevention Tips for Seniors in Florida',
                'category' => 'Elderly Care',
                'date' => 'Sep 05, 2026',
                'read_time' => '5 min read',
                'author' => 'Physical Therapy Team',
                'author_role' => 'Lead Mobility Specialist',
                'author_avatar' => 'PT',
                'image' => 'https://images.unsplash.com/photo-1516549655169-df83a0774514?q=80&w=1200&auto=format&fit=crop',
                'excerpt' => 'Falls are the leading cause of injury among seniors. Discover practical steps to eliminate home hazards and improve physical balance.',
                'tags' => ['FallPrevention', 'PhysicalTherapy', 'SeniorSafety', 'Mobility'],
                'tinymce_content' => '
                    <p class="lead">Falls are the leading cause of emergency room visits and loss of independence among seniors. Fortunately, up to 80% of home falls can be prevented with simple adjustments and targeted balance training.</p>

                    <h2>1. Get a Professional Physical Therapy Assessment</h2>
                    <p>Our licensed physical therapists conduct comprehensive gait and balance evaluations directly in your home, prescribing customized leg-strengthening exercises.</p>

                    <h2>2. Essential Home Safety Modifications</h2>
                    <ul>
                        <li>Install sturdy grab bars next to the toilet and inside the shower.</li>
                        <li>Apply non-slip rubber mats inside bathtubs.</li>
                        <li>Ensure all stairs have secure handrails on both sides.</li>
                    </ul>
                ',
            ],
        ];

        return $posts[$this->slug] ?? $posts['5-essential-benefits-of-in-home-skilled-nursing-post-surgery'];
    }

    public function getRelatedPostsProperty(): array
    {
        return [
            [
                'title' => "Understanding Alzheimer's & Dementia Care at Home",
                'category' => 'Memory Support',
                'date' => 'Sep 12, 2026',
                'slug' => 'understanding-alzheimers-care-at-home',
                'image' => 'https://images.unsplash.com/photo-1584515979956-d9f6e5d09982?q=80&w=600&auto=format&fit=crop',
            ],
            [
                'title' => 'Top 10 Fall Prevention Tips for Seniors in Florida',
                'category' => 'Elderly Care',
                'date' => 'Sep 05, 2026',
                'slug' => 'top-10-fall-prevention-tips-for-seniors',
                'image' => 'https://images.unsplash.com/photo-1516549655169-df83a0774514?q=80&w=600&auto=format&fit=crop',
            ],
            [
                'title' => 'Managing Congestive Heart Failure (CHF) at Home',
                'category' => 'Chronic Care',
                'date' => 'Aug 28, 2026',
                'slug' => '5-essential-benefits-of-in-home-skilled-nursing-post-surgery',
                'image' => 'https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?q=80&w=600&auto=format&fit=crop',
            ],
        ];
    }
};
