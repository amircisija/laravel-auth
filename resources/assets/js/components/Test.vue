<template>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default p-4" v-for="result in results" v-bind:key="result.id">
                    <h1>{{ result.title }}</h1>
                    <p>{{ result.abstract }}.</p>
                    <small> {{ result.created_date}} </small>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import Axios from "axios";
export default {
  data() {
    return {
      results: []
    };
  },

  mounted() {
    axios
      .get(
        "https://api.nytimes.com/svc/topstories/v2/home.json?api-key=b299fa65ce9541008701a7ffb8029d7a"
      )
      .then(response => {
        this.results = response.data.results;
      });
  }
};
</script>
