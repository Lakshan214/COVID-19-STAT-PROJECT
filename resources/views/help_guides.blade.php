<!-- Assuming you have fetched the helpGuides from the backend and passed them to the Blade view -->
@extends('layouts.app')

@section('content')
  <div class="container">
    <div id="app">
      <!-- HelpGuideList component receives the helpGuides prop -->
      <help-guide-list :help-guides="{{ json_encode($helpGuides) }}"></help-guide-list>
      <!--  directive ensures the form is only shown to authenticated users -->
      @auth
        <!-- HelpGuideForm component emits the "submit" event to the parent -->
        <help-guide-form @submit="addHelpGuide"></help-guide-form>

      @endauth
    </div>
  </div>
@endsection

<script>
const app = new Vue({
  el: '#app',
  methods: {
    addHelpGuide(formData) {
      // Handle the form submission here (e.g., send data to the backend)
      // and update the helpGuides list accordingly
    },
  },
});
</script> 
