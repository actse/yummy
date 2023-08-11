<template>
      <div class="w-full min-h-screen relative">
        <div class="relative max-w-md mx-auto h-screen bg-white border">
            <!--Header-->
            <div class="relative w-full px-7 py-4 bg-white border-b-2 border-gray-300 shadow-sm">
                <Link href="menu_customer"><img class="absolute left-3 " src="../../imgs/vector.svg"></Link>
                <label for="voice-search" class="sr-only">Search</label>
                <div class="flex justify-center items-center text-2xl font-bold text-gray-700">
                    <h1>ตะกร้า</h1>
                </div>

            </div>

            <!-- List Menu -->
            <div class="bg-white w-full p-4">
                <div v-for="(item, index) in items" :key="index" class="relative flex border-b-2 py-4 border-gray-300 bg-white">
                    <img class="w-[80px] h-[80px] rounded-[10px]" src="https://via.placeholder.com/90x90"/>
                    <div class="px-2">
                        <h2 class="text-lg text-gray-700 font-bold">{{ item.title }}</h2>
                        <p class="text-sm text-gray-400">{{ item.description }}</p>
                        <p class="text-sm text-gray-400">{{ item.comments }}</p>
                        <!-- Edie Comment -->
                        <div class="absolute flex text-sm text-blue-400 bottom-2">
                            <button type="button" @click="openselectedItem(item)"><p>แก้ไข</p></button>
                        </div>
                    </div>
                    <!-- Remove Item Cart -->
                        <img class="absolute top-5 right-0" src="../../imgs/trash.svg">
                    <!-- Increase and Decrease Item Cart -->
                    <div class="flex absolute right-0 bottom-2 items-center gap-3">
                        <button type="button" @click="decreaseQuantity(index)">
                        <img src="../../imgs/remove_empty.svg" alt="Decrease">
                        </button>
                        <span class="font-bold text-gray-600">{{ item.quantity  }}</span>
                        <button type="button" @click="increaseQuantity(index)">
                        <img src="../../imgs/add_empty.svg" alt="Increase">
                        </button>
                    </div>
                </div>
            </div>
            <!-- Footer Cart -->
            <div class="fixed max-w-md mx-auto w-full h-20 py-4 bottom-0 bg-white text-center border-t-2 border-gray-300">
                <button class="bg-orange-400 w-52 h-11 rounded-full shadow-md text-white hover:bg-orange-500" type="submit" name="submit_cart">สั่ง {{ items.length ?? '0' }} รายการ</button>
            </div>

            <!-- Modal content -->
            <div>
              <ListMenuModal v-if="isListMenuModalOpen != false" >
                <form
                        @submit.prevent="addtocart"
                        @input="form.errors.clear($event.target.name)"
                        enctype="multipart/form-data"
                    >
                        <div
                            class="flex justify-between text-gray-800 font-bold border-b-2 border-gray-300"
                        >
                            <h1 class="text-lg text-gray-600 font-bold">
                               {{ selectedItem.title_name }}
                            </h1>
                            <button>
                                <img
                                    @click="isListMenuModalOpen = false"
                                    class="w-3 top-0 right-0"
                                    src="../../imgs/X.svg"
                                />
                            </button>
                        </div>
                        <div class="my-2">
                            <h2 class="text-base font-bold text-gray-600">
                                ข้อความเพิ่มเติม
                            </h2>
                            <p class="text-xs text-gray-400">
                                คุณสามารถใส่ข้อความเพิ่มเติมได้ที่นี่ เช่น
                                แพ้อาหาร ไม่ใส่ผัก
                            </p>
                            <textarea type="textarea"
                                rows="4"
                                class="w-full mt-2 border-2 border-gray-300 rounded-lg text-gray-600 text-sm focus:ring-gray-300 focus:border-gray-300"
                                placeholder="ตัวอย่าง ไม่ใส่กุ้ง"
                                v-model="selectedItem.comments"
                            ></textarea>
                        </div>
                        <div class="flex flex-row-reverse mt-6">
                            <button
                                type="submit"
                                class="bg-orange-300 text-white w-20 h-8 rounded-lg shadow-md shadow-gray-400"
                            >
                                เพิ่ม
                            </button>
                        </div>
                    </form>
              </ListMenuModal>
            </div>
        </div>
      </div>

</template>

<script>
import ListMenuModal from "@/components/MenuModal.vue";
export default {
  components: {
    ListMenuModal,
  },
  data() {
    return {
      isListMenuModalOpen: false,
        selectedItem: null,
      items: [
        {
          itemId:'1',
          title_name: 'สามชั่นสไลด์ Coller pork',
          description: 'สั่งได้ครั้งละ 3 ออร์เดอร์เท่านั้น',
          image: 'https://via.placeholder.com/90x90',
          quantity: 3,
          comments:'แพ้เห็ด',
          statu:'0',
        },
        {
          itemId:'2',
          title_name: 'ผักรวม',
          description: '',
          image: 'https://via.placeholder.com/90x90',
          quantity: 1,
          comments:'แพ้กุ้ง',
          statu:'0',
        },
        // ... ข้อมูลอื่น ๆ
      ],
    };
  },
  computed: {
    totalOrder() {
      return this.items.reduce((total, item) => total + item.quantity, 0);
    },
  },
  methods: {
    increaseQuantity(index) {
      this.items[index].quantity++;
    },
    decreaseQuantity(index) {
      if (this.items[index].quantity > 1) {
        this.items[index].quantity--;
      }
    },
    openselectedItem(item){
      this.isListMenuModalOpen = true;
      this.selectedItem = item;

    },
     addtocart() {
            this.title_name;

            let fromdata = new FormData();

            console.log("ชื่อเมนู : " + this.selectedItem.title_name);
            console.log("comment : " + this.selectedItem.comments);
            this.selectedItem.comments = this.selectedItem.comments;
            this.isListMenuModalOpen = false;

        },
  },
};
</script>

<script setup>
import { Link } from '@inertiajs/vue3';
</script>

<style>

</style>
