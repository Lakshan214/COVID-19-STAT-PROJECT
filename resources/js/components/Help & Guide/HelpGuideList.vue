<template>



  <div class="container mt-4">
    <div class="row">
      <div class="col-md-3">
        <h3 class="mb-4">Contributors</h3>
        <ul class="list-group">
          <li
            v-for="helpGuide in helpGuides"
            :key="helpGuide.id"
            class="list-group-item d-flex justify-content-between align-items-center"
          >
            <div>
              <strong>{{ helpGuide.user.name }}</strong>
              <br />
              <small>{{ helpGuide.user.email }}</small>
            </div>
            <span class="help-guide-date">{{ formatDate(helpGuide.created_at) }}</span>
          </li>
        </ul>
      </div>

      <div class="col-md-9">
        <h2 class="text-center mt-4" style="color:Red" ><b>HELP & GUIDE</b></h2>
        <div
          v-for="helpGuide in helpGuides"
          :key="helpGuide.id"
          class="help-guide-item bg-light p-4 rounded"
        >
          <div class="help-guide-header d-flex justify-content-between align-items-center">
            <strong>{{ helpGuide.user.name }}</strong>
            <span class="help-guide-date">{{ formatDate(helpGuide.created_at) }}</span>
          </div>
          <div class="help-guide-description mt-2">{{ helpGuide.description }}</div>
          <a :href="helpGuide.link" target="_blank" class="help-guide-link mt-2">{{ helpGuide.link }}</a>
        </div>

        <div class="text-center mt-5">
          <!-- Add your COVID-19 image source here -->
          <h3>  Only logged-in you can add “help guide”s.</h3>
        </div>
      </div>
    </div>
  </div>
</template>




<script>
export default {
  props: {
    helpGuides: {
      type: Array,
      required: true,
    },
  },
  methods: {
    formatDate(dateString) {
      const options = { year: 'numeric', month: 'long', day: 'numeric' };
      return new Date(dateString).toLocaleDateString(undefined, options);
    },
  },
};
</script>

<style>
/* Add some styles to format the blog-like appearance */
.help-guide-item {
  border: 1px solid #ccc;
  padding: 10px;
  margin-bottom: 10px;
}

.help-guide-header {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.help-guide-date {
  font-size: 0.8rem;
  color: #999;
}

.help-guide-description {
  margin-top: 5px;
}

.help-guide-link {
  display: block;
  margin-top: 5px;
  color: #007bff;
  text-decoration: underline;
}

/* Add styles for the user list on the left side */
.col-md-3 {
  background-color:#F2ACA4 ;
  border-radius: 5px;
  padding: 10px;
}

.list-group-item {
  cursor: pointer;
  transition: background-color 0.2s;
}

.list-group-item:hover {
  background-color:Red;
}
</style>

