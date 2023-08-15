<template>
    <div class="w-full min-h-screen relative">
        <div class="max-w-md mx-auto h-screen bg-white border">
                <!--Header-->
                <div class="relative w-full px-7 py-4 bg-white border-b-2 border-gray-300 shadow-sm">
                    <a rel="stylesheet" href="home_customer"><img class="absolute left-3 " src="../../imgs/vector.svg"></a>
                    <label for="voice-search" class="sr-only">Search</label>
                    <div class="flex justify-center items-center text-2xl font-bold text-gray-700">
                    <h1>เรียกพนักงาน</h1>
                </div>
                </div>

                <div class="bg-white p-4">
                        <div v-for="(item, index) in items" :key="index" class="grid py-3  bg-white hover:bg-gray-100">

                            <input type="checkbox" :id="'checkbox' + index" v-model="selectedItems" :value="item" class="hidden peer" required="">
                            <label :for="'checkbox' + index" class="inline-flex w-full p-5 text-gray-500 bg-white border-2 border-gray-200 rounded-lg cursor-pointer focus:ring-orange-500 peer-checked:border-orange-500 hover:text-gray-600 ">                           
                                <div class="block">
                                    <div class="w-full text-lg font-semibold">{{ item }}</div>
                                </div>
                            </label>
                            <div v-if="selectedItems.includes(item)" class="mt-2">
                                <input type="text" :id="`input-${index}`" v-model="itemDetails[item]" placeholder="กรอกลายละเอียด...เช่น จำนวน ขอโต๊ะเด็ก เป็นต้น" class="w-full border-2 focus:ring-gray-300 focus:border-gray-300 border-gray-400 rounded-lg" />
                            </div>
                        </div>
                        <p>เลือกได้: {{ selectedItems }}</p>
                        <p>ลายละเอียด: {{ itemDetails }}</p>
                 </div>
        </div>
    </div>
</template>

<script>
export default {
  data() {
    return {
      items: ['ขอช้อน', 'ขอจาน', 'ขอแก้ว', 'ขอเครื่องปรุง','โต๊ะเสีย','อื่นๆ'],
      selectedItems: [],
      itemDetails: {},
    };
  },
  methods: {

  },
};
</script>

<style>

</style>