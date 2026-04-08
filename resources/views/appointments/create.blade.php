@extends('layouts.app')

@section('title', 'Book Appointment')

@section('content')
<div class="appointment-container">
    <h1>📅 @lang('tran.book')</h1>

    <form method="post" action="{{ route('appointments.store') }}">
        @csrf
        <div class="form-group">
            <label>@lang('tran.department')</label>
            <select name="department_id" id="department" required>
                <option value="">--</option>
                @foreach($departments as $d)
                    <option value="{{ $d->id }}">{{ $d->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label>@lang('tran.doctor')</label>
            <select name="doctor_id" id="doctor" required>
                <option value="">--</option>
                @foreach($departments as $d)
                    @foreach($d->doctors as $doc)
                        <option value="{{ $doc->id }}" data-department="{{ $d->id }}">
                            {{ $doc->name }}
                        </option>
                    @endforeach
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label>@lang('tran.patient_name')</label>
            <input type="text" name="patient_name" placeholder="@lang('tran.patient_name')" required/>
        </div>

        <div class="form-group">
            <label>Email</label>
            <input type="email" name="patient_email" placeholder="Email"/>
        </div>

        <div class="form-group">
            <label>@lang('tran.phone')</label>
            <input type="text" name="patient_phone" placeholder="@lang('tran.phone')" required/>
        </div>

        <div class="form-group">
            <label>@lang('tran.schedule')</label>
            <input type="datetime-local" name="scheduled_at" required/>
        </div>

        <div class="form-group">
            <label>@lang('tran.notes')</label>
            <textarea name="notes" placeholder="@lang('tran.notes')"></textarea>
        </div>

        <button type="submit" class="btn-submit">@lang('tran.submit')</button>
    </form>
</div>

<script>
document.addEventListener("DOMContentLoaded", function() {
    let departmentSelect = document.getElementById("department");
    let doctorSelect = document.getElementById("doctor");

    // Hide all doctors initially
    Array.from(doctorSelect.options).forEach(option => {
        if(option.value !== "") {
            option.style.display = "none";
        }
    });

    departmentSelect.addEventListener("change", function() {
        let selectedDept = this.value;

        // Reset doctor selection
        doctorSelect.value = "";

        Array.from(doctorSelect.options).forEach(option => {
            if(option.value === "") {
                option.style.display = "block"; // keep the default "--"
            } else if(option.getAttribute("data-department") === selectedDept) {
                option.style.display = "block";
            } else {
                option.style.display = "none";
            }
        });
    });
});
</script>
@endsection
