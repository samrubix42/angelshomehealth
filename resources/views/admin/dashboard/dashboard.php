<?php

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

new #[Layout('layouts::admin')] #[Title('Dashboard | Angels Home Health Admin')] class extends Component
{
    public string $statusFilter = 'All';

    public string $search = '';

    // Mock Consultations & Inquiries State
    public array $inquiries = [
        [
            'id' => 101,
            'name' => 'Eleanor Vance',
            'phone' => '+1 (352) 849-2041',
            'email' => 'eleanor.vance@example.com',
            'service' => 'Skilled Nursing & Rehab',
            'date' => 'Sep 21, 2026',
            'status' => 'New',
            'notes' => 'Post-op hip replacement care required 3x weekly.',
        ],
        [
            'id' => 102,
            'name' => 'Robert Sterling',
            'phone' => '+1 (352) 771-9302',
            'email' => 'r.sterling@example.com',
            'service' => 'Physical Therapy',
            'date' => 'Sep 20, 2026',
            'status' => 'Contacted',
            'notes' => 'Gait rehabilitation and home balance assessment.',
        ],
        [
            'id' => 103,
            'name' => 'Margaret Miller',
            'phone' => '+1 (352) 402-1834',
            'email' => 'mmiller@example.com',
            'service' => 'Memory Care Support',
            'date' => 'Sep 19, 2026',
            'status' => 'Scheduled',
            'notes' => 'Family respite care & memory safety routine.',
        ],
        [
            'id' => 104,
            'name' => 'David Hassel',
            'phone' => '+1 (352) 991-4420',
            'email' => 'david.hassel@example.com',
            'service' => 'Chronic Disease Care',
            'date' => 'Sep 18, 2026',
            'status' => 'Completed',
            'notes' => 'CHF vital sign tracking and blood pressure monitoring.',
        ],
        [
            'id' => 105,
            'name' => 'Clara Barton',
            'phone' => '+1 (352) 630-1198',
            'email' => 'cbarton@example.com',
            'service' => 'Personal Care Assistance',
            'date' => 'Sep 17, 2026',
            'status' => 'New',
            'notes' => 'Bathing and daily hygiene assistance needed.',
        ],
    ];

    public function updateStatus(int $id, string $newStatus): void
    {
        foreach ($this->inquiries as &$inquiry) {
            if ($inquiry['id'] === $id) {
                $inquiry['status'] = $newStatus;
                break;
            }
        }
    }

    public function deleteInquiry(int $id): void
    {
        $this->inquiries = array_filter($this->inquiries, fn ($inquiry) => $inquiry['id'] !== $id);
    }

    public function getFilteredInquiriesProperty(): array
    {
        return array_filter($this->inquiries, function ($inquiry) {
            $matchesStatus = ($this->statusFilter === 'All') || ($inquiry['status'] === $this->statusFilter);
            $matchesSearch = empty($this->search) ||
                str_contains(strtolower($inquiry['name']), strtolower($this->search)) ||
                str_contains(strtolower($inquiry['service']), strtolower($this->search)) ||
                str_contains(strtolower($inquiry['phone']), strtolower($this->search));

            return $matchesStatus && $matchesSearch;
        });
    }
};
