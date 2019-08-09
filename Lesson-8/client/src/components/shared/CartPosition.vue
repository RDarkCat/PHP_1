<template>
    <tr>
        <td class="cart__table_item1">
            <a href="single_page.html"><img :src="img" alt="Item"></a>
            <div class="cart__table_about">
                <h3>{{cartItem.product_name}}</h3>
                <h4>Color: <span>Red</span></h4>
                <h4>Size: <span>XXL</span></h4>
            </div>
        </td>
        <td>{{cartItem.price}}</td>
        <td>
            <input type="text" class="cart__table_quanity" value="2" v-model="cartItem.quantity">
        </td>
        <td>FREE</td>
        <td>{{cartTableQuantity}}</td>
        <td>
            <div class="cart-item-del" @click="$emit('remove', cartItem)"><i class="fa fa-times-circle" aria-hidden="true"></i></div>
        </td>
    </tr>
</template>

<script>
  export default {
    name: 'CartPosition',
    props: ['cartItem', 'img'],
    computed: {
      cartTableQuantity: function() {
        return this.cartItem.price * this.cartItem.quantity;
      }
    },
    mounted() {
      axios(`http://localhost:8888/controllers/cart.php`, {
        method: 'GET',
        headers: {
          'Content-Type': 'application/json'
        }
      }).then(response => {
        for (let el of response.data) {
          this.products.push(el);
          this.filtered.push(el);
        }
      })
    }
  }
</script>

<style scoped>

</style>
