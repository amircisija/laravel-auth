<template>
  <div class="col-md-6">
    <div class="example">
      <table class="table table-responsive">
        <thead>
          <tr>
            <th>Valuta</th>
            <th>Cijena (EUR)</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="(result, index) in results" v-bind:key="index.id">
            <td>{{ index }}</td>
            <td class="text-right">{{ result.EUR.PRICE }} €</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</template>

<script>
import axios from "axios";

const url =
  "https://min-api.cryptocompare.com/data/pricemultifull?fsyms=BTC,LTC,ETH,BCH,BCC&tsyms=EUR";
export default {
  data() {
    return {
      toBam: 1.95583,
      results: []
    };
  },
  mounted() {
    axios.get(url).then(response => {
      this.results = response.data.RAW;
      this.results.BTC.EUR.PRICE = this.results.BTC.EUR.PRICE.toFixed(2);
      this.results.LTC.EUR.PRICE = this.results.LTC.EUR.PRICE.toFixed(2);
      this.results.ETH.EUR.PRICE = this.results.ETH.EUR.PRICE.toFixed(2);
      this.results.BCH.EUR.PRICE = this.results.BCH.EUR.PRICE.toFixed(2);
    });
  }
};
</script>
