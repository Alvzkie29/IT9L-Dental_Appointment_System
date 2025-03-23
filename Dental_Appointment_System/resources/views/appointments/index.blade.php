@extends('dashboard')

@section('content')
    <div class="container mt-5">
        <h2>Book Appointment</h2>
        <form>
            <div class="row">
                <div class="col-md-6">
                    <label for="patient_name" class="form-label">Patient Name</label>
                    <input type="text" class="form-control" id="patient_name" placeholder="Enter name">
                </div>
                <div class="col-md-6">
                    <label for="patient_email" class="form-label">Patient Email</label>
                    <input type="email" class="form-control" id="patient_email" placeholder="Enter email">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-6">
                    <label for="gender" class="form-label">Gender</label>
                    <select class="form-control" id="gender">
                        <option>Male</option>
                        <option>Female</option>
                        <option>Other</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="age" class="form-label">Age</label>
                    <input type="number" class="form-control" id="age" placeholder="Enter age">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-6">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="text" class="form-control" id="phone" placeholder="Enter phone number">
                </div>
                <div class="col-md-6">
                    <label for="date" class="form-label">Select Date</label>
                    <input type="date" class="form-control" id="date">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-6">
                    <label for="time" class="form-label">Select Time</label>
                    <input type="time" class="form-control" id="time">
                </div>
                <div class="col-md-6">
                    <label for="services" class="form-label">Services</label>
                    <input type="text" class="form-control" id="services" placeholder="Enter service type">
                </div>
            </div>
            <div class="mt-3">
                <label for="problem" class="form-label">Problem</label>
                <textarea class="form-control" id="problem" rows="3" placeholder="Describe the problem"></textarea>
            </div>
            <div class="mt-4">
                <button type="button" class="btn btn-secondary">Cancel</button>
                <button type="submit" class="btn btn-success">Book Appointment</button>
            </div>
        </form>
    </div>
@endsection
