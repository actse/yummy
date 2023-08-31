<template>
<div class=" w-full relative bg-slate-100">
  <Sidennav>
    <div class="flex w-full h-full p-5 gap-5">
        <div class="w-3/6"> 
            <div class="p-5 w-full bg-white rounded-lg border border-gray-200 shadow-lg">
            <div class=" text-left text-gray-500 text-sm">
                <div class="py-2">
                    <h1 class="text-xl text-gray-700 font-bold">ข้อมูลโต๊ะหมายเลข 1</h1>
                </div>
                <div class="flex justify-between text-gray-600 font-bold">
                    <p class="py-1">เลที่ : <span>800560002</span></p>
                    <p class="py-1">โต๊ะหมายเลข <span>1</span></p>
                </div>
                <div>
                    <p class="py-1">ประเภท : <span>Buffe 399</span></p>
                </div>
                <div class="space-y-1">
                    <p class="py-1">ผู้ใหญ่ : <span>1</span></p>
                    <p class="py-1">เด็ก : <span>2</span></p>
                </div>
                <div>
                    <p class="py-1">ผู้รับรายการ : <span>Nida</span></p>
                </div>
                <div class=" flex justify-between">
                    <p class="py-1">วันที่ : <span>2022-04-01</span></p>
                    <p class="py-1">เวลา : <span>16:45</span>น.</p>
                </div>
            </div>
            <hr class="my-2 border-gray-300 border-1">
            <div class="text-sm">
                    <table class="w-full">
                        <thead class="text-lg font-bold text-gray-600 ">
                            <tr>
                                <td class="text-left bg-orange-100">รายการ</td>
                                <td class="w-1/4 text-center bg-orange-100">จำนวน</td>
                                <td class="w-1/4 text-right bg-orange-100">ราคา</td>
                                <td class="w-1/4 text-right bg-orange-100">ราคารวม</td>
                            </tr>
                        </thead>
                        <tbody class=" text-gray-500">
                            <tr>
                                <td class="text-left"> ผู้ใหญ่</td>
                                <td class="text-center">2</td>
                                <td class="text-right">399.00</td>
                                <td class="text-right">798.00</td>
                            </tr>
                            <tr>
                                <td class="text-left"> เด็ก</td>
                                <td class="text-center">1</td>
                                <td class="text-right">199.00</td>
                                <td class="text-right">199.00</td>
                            </tr>
                        </tbody>
                    </table>
            </div>
            <hr class="my-2 border-gray-300 border-1">
            <div class="text-sm text-gray-600 font-bold">
                    <div class="flex justify-between py-1">
                        <p>ส่วนลด</p>
                        <p class="text-orange-500">0.00</p>
                    </div>
                    <div class="flex justify-between py-1">
                        <p>VAT 7%</p>
                        <p class="text-orange-500">69.825</p>
                    </div>
                    <div class="flex justify-between py-1">
                        <p>ทั้งหมดที่ต้องชำระ</p>
                        <p class="text-orange-500">997.5</p>
                    </div>
            </div>
            
            </div>
            <div class="p-5 mt-5 bg-white w-full rounded-lg border border-gray-200 shadow-lg">
                <div class="pb-2">
                    <h1 class="text-xl text-gray-700 font-bold">เพิ่มเติม</h1>
                </div>
                <div class="flex space-x-5">
                    <button class="px-4 py-2 bg-orange-400 text-white shadow-md rounded-md hover:bg-orange-500">โค้ดส่วนลด</button>
                    <button class="px-4 py-2 bg-orange-400 text-white shadow-md rounded-md hover:bg-orange-500">ใบแจ้งหนี้</button>
                    <button class="px-4 py-2 bg-orange-400 text-white shadow-md rounded-md hover:bg-orange-500">ใบกำกับภาษี</button>
                </div>
            </div>
        </div>
        <div class="p-5 w-3/6 h-full bg-white rounded-lg border-gray-200 shadow-lg">
            <div class="py-2">
                <div class="flex justify-between pb-2">
                    <h1 class="text-xl text-gray-700 font-bold">ยอดที่ต้องชำระ</h1>
                    <div class="flex text-lg text-gray-700 font-bold gap-5">
                        <span>{{ 997.50 }}</span><p>บาท</p>
                    </div>
                </div>
                <div class="flex gap-4">
                    
                </div>
            </div>
            <hr class="my-2 border-gray-300 border-1">
            <div class="py-2">
                <div class="pb-2">
                    <h1 class="text-xl text-gray-700 font-bold">เลือกรูปแบบการชำระ</h1>
                </div>
                <div class="flex gap-4">
                    <div class="w-44 h-24">
                        <input type="radio" id="payment-1" name="payment" value="payment-1" class="hidden peer cursor-pointer" required>
                        <label for="payment-1" class="inline-flex items-center justify-center w-full p-4 my-2  text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer peer-checked:border-orange-500 peer-checked:text-orange-500 hover:bg-gray-100 peer-checked:shadow-lg">                           
                            <div class="block">
                                <div class="w-full text-lg font-semibold"><img class="w-14 -h14" src="../../imgs/cash.png" alt="payment1"></div>
                            </div>
                        </label>
                        <p for="payment-2" class="text-center text-gray-600 font-bold peer-checked:text-orange-500">เงินสด</p>
                    </div>
                    <div class="w-44 h-24">
                        <input type="radio" id="payment-2" name="payment" value="payment-2" class="hidden peer cursor-pointer" required>
                        <label for="payment-2" class="inline-flex items-center justify-center w-full p-4 my-2 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer peer-checked:border-orange-500 peer-checked:text-orange-500 hover:bg-gray-100 peer-checked:shadow-lg">                           
                            <div class="block">
                                <div class="w-full text-lg font-semibold"><img class="w-14 -h14" src="../../imgs/wallet.png" alt="payment2"></div>
                            </div>
                        </label>
                        <p for="payment-2" class="text-center text-gray-600 font-bold peer-checked:text-orange-500">โอนจ่าย</p>
                    </div>
                </div>
            </div>
            <hr class="mt-11 border-gray-300 border-1">
            <div class="py-2">
                <div class="pb-2">
                    <h1 class="py-2 text-xl text-gray-700 font-bold">เงินที่ได้รับ</h1>
                    <input type="text" name="" id="">
                </div>
                <div class="flex gap-4">

                </div>
            </div>
        </div>
    </div>
  </Sidennav>
</div>
</template>

<script>
import Sidennav from "@/components/Sidennav.vue";
export default {
    components :{
        Sidennav,
    },
}
</script>

<style>

</style>