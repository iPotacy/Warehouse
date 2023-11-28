@extends('user.index')
@section('user')

<div class="container-xxl flex-grow-1 container-p-y">
  <div class="row">
    <div class="col-lg-12 mb-4 order-0">
      <div class="card">
        <div class="d-flex align-items-end row">
          <div class="col-sm-7">
            <div class="card-body">
              <h5 class="card-title text-primary">Welcome {{ Auth::user()->name }}! 🎉</h5>
              <p class="mb-5"> </p>
            </div>
          </div>
          <div class="col-sm-5 text-center text-sm-left">
            <div class="card-body pb-0 px-0 px-md-4">
              <img
                src="{{ asset('backend/assets/img/illustrations/man-with-laptop-light.png') }}"
                height="140"
                alt="View Badge User"
                data-app-dark-img="illustrations/man-with-laptop-dark.png"
                data-app-light-img="illustrations/man-with-laptop-light.png"
              />
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="contianer">
    <div class="calendar">
      <div class="calendar-header">
        <span class="month-picker" id="month-picker"> May </span>
        <div class="year-picker" id="year-picker">
          <span class="year-change" id="pre-year">
            <pre><</pre>
          </span>
          <span id="year">2020 </span>
          <span class="year-change" id="next-year">
            <pre>></pre>
          </span>
        </div>
      </div>

      <div class="calendar-body">
        <div class="calendar-week-days">
          <div>Sun</div>
          <div>Mon</div>
          <div>Tue</div>
          <div>Wed</div>
          <div>Thu</div>
          <div>Fri</div>
          <div>Sat</div>
        </div>
        <div class="calendar-days">
        </div>
      </div>
      <div class="calendar-footer">
      </div>
      <div class="date-time-formate">
        <div class="day-text-formate">TODAY</div>
        <div class="date-time-value">
          <div class="time-formate">02:51:20</div>
          <div class="date-formate">23 - july - 2022</div>
        </div>
      </div>
      <div class="month-list"></div>
    </div>
  </div>
  
</div>

@endsection