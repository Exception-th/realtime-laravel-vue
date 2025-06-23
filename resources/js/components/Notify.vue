<template>
  <div>
    <h2>📢 Notifications:</h2>
    <ul>
      <li v-for="(note, i) in notifications" :key="i">{{ note }}</li>
    </ul>
  </div>
</template>

<script setup>
import { ref, onMounted } from 'vue'

const notifications = ref([])

onMounted(() => {
console.log('🟡 เริ่ม subscribe...');

Echo.channel('orders')
    .subscribed(() => {
        console.log('🟢 Subscribed to channel orders');
    })
    .listen('.new.order', (e) => {
        console.log('📥 Event Received:', e);
        alert('📢 มีออเดอร์ใหม่: ' + e.message);
    });
})
</script>
