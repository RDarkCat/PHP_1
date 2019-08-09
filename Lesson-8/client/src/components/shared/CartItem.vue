<template>
    <tr>
        <td class="cart__table_item1">
            <a href="single_page.html"><img :src="" alt="Item"></a>
            <div class="cart__table_about">
                <h3>{{cartItem.product_name}}</h3>
                <h4>Color: <span>Red</span></h4>
                <h4>Size: <span>XXL</span></h4>
            </div>
        </td>
        <td>{{cartItem.price}}</td>
        <td>
            <input type="text" class="cart__table_quanity" :value="cartItem.price">
            <input type="hidden" class="cart_table_hidden" :value="cartItemid_product"/>
        </td>
        <td>FREE</td>
        <td>$300</td>
        <td>
            <div class="cart-item-del"><i
                    class="fa fa-times-circle"
                    @click="deleteItem()" aria-hidden="true"></i>
            </div>
        </td>
    </tr>
</template>

<script>
  export default {
    name: 'CartItem',
    props: ['cartItem', 'img'],
    mounted() {

    },
    methods: {
      deleteItem(){
        return 0;
      }
    }
  }
</script>

<style scoped>

</style>
