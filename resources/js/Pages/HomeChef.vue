<template>
    <div class="flex w-full min-h-screen bg-orange-200">
      <div class="relative w-1/2 h-screen bg-white">
          <div class="w-full h-20 bg-whiteb border-b-2 border-gray-200 shadow-lg shadow-gray-300 text-4xl text-center py-4">
            <h1>รายการ ออเดอร์</h1>
          </div>
          <div class="border-b-4 border-gray-300">
            <div class="flex wull h-36 border-l-8 border-green-500">
            <div class="flex flex-col justify-between my-auto px-3 text-gray-700 font-bold bg-white">
                <div class="text-3xl">โต๊ะ 1</div>
                <div class="text-xl">5 รายการ</div>
                <div class="text-lg pt-4">เวลา : <span>18:00</span></div>
            </div>
            <div class="flex flex-col justify-between ml-10 p-4 text-2xl font-medium px-3 text-gray-600">
                <div class="flex items-center gap-3">
                    <div class="w-3 h-3 bg-red-500 rounded-full"></div><div>สด 1</div>
                </div>
                <div class="flex items-center gap-3 ">
                    <div class="w-3 h-3 bg-yellow-500 rounded-full"></div><div>หวาน 1</div>
                </div>
                <div class="flex items-center gap-3 ">
                    <div class="w-3 h-3 bg-green-500 rounded-full"></div><div>ของทานเล่น 1</div>
                </div>
            </div>
            </div>
          </div>
          <div class="absolute flex items-center bottom-0 w-full h-24 border-t-4 border-gray-300  text-white text-2xl font-bold">
            <div class="flex items-center justify-center hover:bg-orange-500 w-full h-full bg-orange-400">กำลังเตรียม</div>
            <div class="flex items-center justify-center hover:bg-orange-500 w-full h-full bg-orange-400">เสร็จแล้ว</div>
          </div>
      </div>
      <div class="relative mx-4 w-full h-screen bg-white">
          <div class="relative w-full h-20 bg-whiteb border-b-2 border-gray-200 shadow-lg shadow-gray-300 text-4xl text-center py-4">
            <img class="absolute left-5" src="../../imgs/frame.svg" alt="">
            <h1>รายละเอียดออเดอร์</h1>
          </div>
          <div class="flex items-center justify-between h-20 m-5 hover:bg-orange-300 border-b-4 border-gray-300">
            <div>
                
            </div>
            <div class="text-3xl px-8 text-gray-700">1</div>
            <div>
                <div class="w-2 h-16 bg-red-500 "></div>
            </div>
            <div class="px-8">
                <img class="w-[70px] h-[70px] rounded-[10px]" src="https://via.placeholder.com/70x70"/>
            </div>
            <div class="text-gray-700 px-10">
                <div class="text-2xl">ชื่ออาหาร</div>
            </div>
            <div class="text-gray-700 px-10 text-2xl">จำนวณ : <span>4</span></div>
            <div class="text-gray-700 px-10">
                <button type="button" name="cancel" class="text-white text-xl font-bold bg-red-400 rounded-full w-[100px] h-[50px] shadow-lg shadow-gray-300 hover:bg-red-500">ยกเลิก</button>
            </div>
          </div>

          <div class="absolute flex justify-center items-center bottom-0 h-24 w-full border-t-4 border-gray-300">
            <button type="submit" name="submit" class="bg-orange-400 hover:bg-orange-500 h-16 w-60 rounded-full shadow-lg shadow-gray-400 text-white text-2xl font-semibold">
                ยืนยันรายการ
            </button>
          </div>
      </div>
  </div>
</template>

<script>
export default {

}
</script>

<style>

</style>
