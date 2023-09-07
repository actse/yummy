<template>
  <div class=" w-full relative bg-slate-100">
   <Sidennav> 
    <div class="flex w-full p-2">
        <div class="flex w-full ">
          
          <div class="flex w-full max-h-screen">
            <!-- Order detail -->
            <div class="w-3/5 p-2 ">
               <!-- search -->
              <div class="mb-5 mt-2 relative w-64 shadow-md rounded-lg">
                    <div class="absolute top-3 left-1 flex items-center pl-3 pointer-events-none">
                        <img class="w-4 h-4" src="../../imgs/search.svg" />
                    </div>
                    <input
                        type="text"
                        id="search"
                        class="bg-white border border-gray-200 text-gray-600 text-sm rounded-lg focus:ring-orange-200 focus:border-orange-200  block w-full pl-10 p-2.5 transition duration-200"
                        placeholder="Search table..."
                        required
                    />
              </div>
              <div class="w-full bg-white rounded-lg border border-gray-200 shadow-lg">
                <div class="flex justify-between p-5">
                  <div class="flex-wrap justify-start">
                    <div class="text-2xl text-gray-700 font-bold">Order # <span>{{ 222 }}</span></div>
                    <div class="text-gray-400">เวลา : <span>20:12 น.</span></div>
                  </div>
                  <div class="flex-wrap text-right">
                    <div class="text-2xl text-gray-700 font-bold">โต๊ะ <span>{{ 8 }}</span></div>
                    <div class="text-gray-600">{{3}} รายการ</div>
                  </div>
                </div>
              </div>
              <div class="mt-4 w-full bg-white rounded-lg border border-gray-200 shadow-lg">
                  <div class="p-5">
                    <h1 class="text-2xl text-gray-700 font-bold">รายละเอียดการสั่ง</h1>
                    <hr class="my-2 border-gray-200 border-2">

                    <!-- List Menu -->
                    <!-- <div
                          v-for="(order, index) in orders"
                          :key="index"
                          class="relative flex border-b-2 py-4 border-gray-300 bg-white"
                      >
                          <img
                              class="w-[100px] h-[100px] rounded-[5px]"
                              src="https://via.placeholder.com/90x90"
                          />
                          <div class="px-2">
                              <div>
                                  <h2 class="text-lg text-gray-700 font-bold">
                                      {{ order.name_menu }}
                                  </h2>
                                  <p class="text-sm px-3 text-gray-400">
                                      {{ order.comment }}
                                  </p>
                                  <p class="text-sm px-3 text-gray-400">{{ order.amount }}</p>
                              </div>
                          </div>
                      </div> -->
                      <div class="w-full">
                        <div class="w-full flex items-center my-2 bg-gray-100 rounded-l-md hover:bg-gray-200">
                          <img class="w-[70px] h-[70px] rounded-l-md" src="https://via.placeholder.com/90x90" alt="#">
                          <div class="flex flex-wrap justify-between w-full py-5 px-5 text-gray-600 font-bold ">
                              <div class="w-3/6"><p>สามชั้นสไลด์ Collar pork</p></div>
                              <div class="w-2/6"><p class="text-red-500">-</p></div>
                              <div class="w-1/6"><p>x3</p></div>
                          </div>
                        </div>
                        <div class="w-full flex items-center my-2 bg-gray-100 rounded-l-md hover:bg-gray-200">
                          <img class="w-[70px] h-[70px] rounded-l-md" src="https://via.placeholder.com/90x90" alt="#">
                          <div class="flex flex-wrap justify-between w-full py-5 px-5 text-gray-600 font-bold ">
                              <div class="w-3/6"><p>สามชั้นสไลด์ Collar pork</p></div>
                              <div class="w-2/6"><p class="text-red-500">-</p></div>
                              <div class="w-1/6"><p>x3</p></div>
                          </div>
                        </div>
                        <div class="w-full flex items-center my-2 bg-gray-100 rounded-l-md hover:bg-gray-200">
                          <img class="w-[70px] h-[70px] rounded-l-md" src="https://via.placeholder.com/90x90" alt="#">
                          <div class="flex flex-wrap justify-between w-full py-5 px-5 text-gray-600 font-bold ">
                              <div class="w-3/6"><p>สามชั้นสไลด์ Collar pork</p></div>
                              <div class="w-2/6"><p class="text-red-500">xxxxxx</p></div>
                              <div class="w-1/6"><p>x3</p></div>
                          </div>
                        </div>
                        <hr class="my-2 border-gray-200 border-2">
                        <div class="mt-4 text-right">
                          <button class="px-4 py-2 bg-orange-400 text-white text-xl rounded-md shadow-lg hover:bg-orange-500 transform transition duration-200">รับออร์เดอร์</button>
                        </div>
                      </div>

                  </div>
              </div>
            </div>


            <!-- list orders -->
            <div class="w-2/5">
              <div class="w-full p-2">
                <div class="mb-5 mt-2 space-x-3">
                  <button class="bg-white text-gray-600 text-base font-bold shadow-sm p-2 w-28 border border-gray-200 hover:bg-orange-300 hover:text-white rounded-md focus:bg-orange-300 focus:text-white transform transition duration-200">Cooking</button>
                  <button class="bg-white text-gray-600 text-base font-bold shadow-sm p-2 w-28 border border-gray-200 hover:bg-orange-300 hover:text-white rounded-md focus:bg-orange-300 focus:text-white transform transition duration-200">Finished</button>
                </div>
                <div class="p-5 w-full  bg-white rounded-lg border border-gray-200 shadow-lg">
                    <h1 class="text-2xl text-gray-700 font-bold">รายการสั่ง</h1>
                    <hr class="my-2 border-gray-200 border-2">
                    
                    <div v-for="(order, index) in orders" :key="index" class="border-b-2 border-gray-200 hover:bg-gray-100">
                      <div class="w-full h-24 flex justify-between border-l-8 border-green-400">
                      <div class="flex flex-col justify-between px-2">
                        <div class="text-2xl text-gray-700 font-bold">โต๊ะ <span>{{ order.bill.table_number }}</span></div>
                        <div class="text-gray-500">
                          <p>3 รายการ</p>
                          <p>เวลาที่สั่ง :<span>{{ order.time_order }}</span>น.</p>
                        </div>
                      </div>
                      <div class="flex flex-col justify-between text-right">
                        <div class="text-xl text-gray-700 font-bold">Order # <span>{{ order.order_number }}</span></div>
                        <div class="text-green-500"><p>{{ order.order_status }}</p></div>
                      </div>
                    </div>
                    </div>
                </div>
              </div>
            </div>
          </div>

        </div>
    </div>
   </Sidennav>
  </div>
</template>

<script>
import axios from "axios";
import Sidennav from "@/components/Sidennav.vue";

export default {
  components: {
        Sidennav,
  },
  data() {
    return {
    orders: [
    {
      order_number: 222,
      time_order:"20:12",
      order_status:"Cooking",
      bill: [
        {
          table_number: 1,
        }
      ]
    },
    {
      order_number: 223,
      time_order:"20:15",
      order_status:"Pending",
      bill: [
        {
          table_number: 1,
        }
      ]
    },
    {
      order_number: 224,
      time_order:"20:16",
      order_status:"Pending",
      bill: [
        {
          table_number: 2,
        }
      ]
    },
    ]

      };
    },
    computed: {
      
    },
    methods: {
      getFirstOrderStatus() {
        const firstOrder = this.orders[0];
        return firstOrder.order_status;
      },
      fetch_list_orders() {
            axios
                .get("/fetch_list_orders")
                .then((response) => {
                    this.orders = response.data;
                    console.log(this.orders);
                })
                .catch((error) => {
                    console.log(error);
                });
        },
    },
}
</script>

<style>

</style>
