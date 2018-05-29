<template>
  <div class="col-md-6">

      <div class="form-group col-sm-6">
        <label>Količina (EUR):</label>
        <input v-model="amount_int" class="form-control" type="text" placeholder="0 EUR" v-on:keyup="calculate()">
      </div>

      <div class="form-group col-sm-6">
        <label for="">Odaberite kripto valutu:</label>
        <select class="form-control" v-model="selected" v-on:change="calculate()">
          <option disabled value="">Odaberite kripto valutu</option>
          <option v-for="(result, index) in results">{{ index }}</option>
        </select>
      </div>

      <div class="form-group col-sm-6">
        <small>
          <span> Provision: {{ provision_int }} %</span>
        </small>
        <br>
        <span>
          Dobijate: {{ amount_out }}
        </span>
        <span>{{ selected }}</span>
      </div>

      <div class="clearfix"></div>

      <div class="form-group col-sm-12">
        <p>Eura za uplatiti {{ amount_int }}</p>
        <p>Provizija iznosi
          <span v-on:change="calculate()">{{ provision_out }}</span>
        </p>
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
      results: [],
      selected: "",
      amount_int: "",
      amount_out: "",
      provision_int: 5,
      provision_out: ""
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
  },
  methods: {
    calculate() {
      switch (this.selected) {
        case "BTC":
          this.amount_out = (
            this.amount_int / this.results.BTC.EUR.PRICE
          ).toFixed(4);
          break;
        case "BCH":
          this.amount_out = (
            this.amount_int / this.results.BCH.EUR.PRICE
          ).toFixed(4);
          break;
        case "BCC":
          this.amount_out = (
            this.amount_int / this.results.BCC.EUR.PRICE
          ).toFixed(4);
          break;
        case "ETH":
          this.amount_out = (
            this.amount_int / this.results.ETH.EUR.PRICE
          ).toFixed(4);
          break;
        case "LTC":
          this.amount_out = (
            this.amount_int / this.results.LTC.EUR.PRICE
          ).toFixed(4);
          break;
      }
    }
  }
};
</script>
