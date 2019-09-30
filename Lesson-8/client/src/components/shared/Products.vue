<template>
    <div class="items">
        <product v-on:addProduct="addProduct(product)"
                v-for="product of filtered"
                :key="product.id_product"
                :product="product"></product>
    </div>
</template>

<script>
  const API = `https://raw.githubusercontent.com/RDarkCat/shop_database/master`;
  import Product from './Product.vue';
  import axios from 'axios';

  export default {
    name: 'Products',
    components: {
      Product
    },
    data() {
      return {
        products: [],
        filtered: []
      }
    },
    methods: {
      filter(value) {
        let regexp = new RegExp(value, 'i');
        this.filtered = this.products.filter(el => regexp.test(el.product_name));
      },
      addProduct(product) {
        this.$store.dispatch('addProduct', product);
      }
    },
    mounted() {
      axios(`http://localhost:8888/controllers/catalog.php`, {
        method: 'GET',
        headers: {
          'Content-Type': 'application/json'
        }
        /*data: {
          is_front: 9
        },*/
      }).then(response => {
        for (let el of response.data) {
          this.products.push(el);
          this.filtered.push(el);
        }
      })
    }
  }
</script>

<style lang="scss" scoped>

</style>
