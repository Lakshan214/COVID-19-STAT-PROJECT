<template>
  <div class="container mt-5">
    <h2 class="mb-4">COVID-19 Stats</h2>
    <div class="row">
      <div class="col-md-6">
        <div class="card mb-4 bg-primary text-white">
          <div class="card-header">Report Date</div>
          <div class="card-body">
            <p class="fs-4">{{ covidData.report_date }}</p>
          </div>
        </div>

        <div class="card mb-4 bg-warning text-white">
          <div class="card-header">Total Cases</div>
          <div class="card-body">
            <p class="fs-4">{{ covidData.total_cases }}</p>
          </div>
        </div>

        <div class="card mb-4 bg-danger text-white">
          <div class="card-header">New Cases</div>
          <div class="card-body">
            <p class="fs-4">{{ covidData.new_cases }}</p>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="card mb-4 bg-danger text-white">
          <div class="card-header">Total Deaths</div>
          <div class="card-body">
            <p class="fs-4">{{ covidData.total_deaths }}</p>
          </div>
        </div>

        <div class="card mb-4 bg-secondary text-white">
          <div class="card-header">New Deaths</div>
          <div class="card-body">
            <p class="fs-4">{{ covidData.new_deaths }}</p>
          </div>
        </div>

        <div class="card mb-4 bg-success text-white">
          <div class="card-header">Total Recovered</div>
          <div class="card-body">
            <p class="fs-4">{{ covidData.total_recovered }}</p>
          </div>
        </div>

        <div class="card mb-4 bg-info text-white">
          <div class="card-header">Active Cases</div>
          <div class="card-body">
            <p class="fs-4">{{ covidData.active_cases }}</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    covidData: {
      type: Object,
      required: true,
    },
  },
};
</script>

<style>
/* Custom styles for the COVID-19 Stats component */
.card {
  border: none;
  border-radius: 10px;
}

.card-header {
  font-size: 1.2rem;
  font-weight: 500;
}

.card-body {
  padding: 15px;
}

.bg-primary {
  background-color: #007bff; /* Primary color: Blue */
}

.bg-secondary {
  background-color: #6c757d; /* Secondary color: Gray */
}

.bg-success {
  background-color: #28a745; /* Success color: Green */
}

.bg-danger {
  background-color: #dc3545; /* Danger color: Red */
}

.bg-warning {
  background-color: #ffc107; /* Warning color: Yellow */
}

.bg-info {
  background-color: #17a2b8; /* Info color: Cyan */
}

.text-white {
  color: #ffffff;
}

/* Add any additional styles as per your preference */
</style>
