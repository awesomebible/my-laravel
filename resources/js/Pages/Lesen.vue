<script setup>
    import BreezeAuthenticatedLayout from '@/Layouts/Authenticated.vue';
    import { Head } from '@inertiajs/inertia-vue3';
    import axios from 'axios'
    import { marked } from 'marked';
    
    </script>
    <template>
        <Head title="Lesen" />
    
        <BreezeAuthenticatedLayout>
            <template #header>
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    Lesen
                </h2>
            </template>
    
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200 text-sm" v-html="content">
                            
                        </div>
                        <button @click="fetchContent">Clickey</button>
                        <button @click="fetchsecond">Clickey</button>
                    </div>
                </div>
            </div>
        </BreezeAuthenticatedLayout>
    </template>
    <script>
    export default {
      data() {
        return {
          bookIndex: [],
          content: "",
          bookresponse: "hihi"
        }
      },
      mounted(){
        axios.get('/modules/Menge-Bibel/index.json', {crossdomain: true})
            .then(response => {
                console.log(response);
                console.log(response.data.name)
                bookIndex = response.bookIndex
                })
            .catch(function (error) {
                console.log(error);
                });
    
        axios.get("/modules/Menge-Bibel/at/Genesis/1.md")
            .then(bookresponse => {
                    console.log(bookresponse)
                    this.content = marked.parse(bookresponse.data)
            })
      },
      methods: {
        fetchsecond: function(){
    
        }
      }
    }
    </script>