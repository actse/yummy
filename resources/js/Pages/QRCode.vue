<template>
  <Slip>
    <div class="text-center text-sm">
      <img class="mx-auto mb-3 w-24" src="../../imgs/actselogo.png">
      <img class="mx-auto w-32 h-32" src="../../imgs/QR_Code.png">
      <div class="text-center  text-sm text-gray-800 font-bold my-2">แสกน QR CODE เพื่อสั่งอาหาร</div>
      <!-- <hr class="border-gray-200 border-2"> -->
      <p class="text-gray-500 text-lg">...............................................................................</p>

      <div class="text-left text-gray-600 mt-2">
        <p>โต๊ะ : 2</p>
        <p>ประเภท : Buffe 399</p>
        <p>จำนวนลูกค้า : 4 ท่าน</p>
        <p>ผู้ใหญ่ : 2 ท่าน</p>
        <p>เด็ก : 2 ท่าน</p>
      </div>
      <!-- <hr class="border-gray-200 border-2"> -->
      <p class="text-gray-500 text-lg">...............................................................................</p>

      <div class="mt-2 text-gray-800">เวลา : 20:00 - 22:00 น.</div>
      <!-- <hr class="border-gray-200 border-2"> -->
      <p class="text-gray-500 text-lg">...............................................................................</p>

    </div>
  </Slip>
</template>

<script>
import Slip from "@/Layouts/Slip.vue";
export default {
    components :{
        Slip,
    },
}
</script>

<style>

</style>