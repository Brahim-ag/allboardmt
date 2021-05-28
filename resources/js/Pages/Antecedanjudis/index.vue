<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                antecejudis 
            </h2>
        </template>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <table class="border-collapse border table-auto">
                <tr>
                    <th>Affaire</th>
            <th>Qualité</th>
            <th>Jugement Prononcé</th>
            <th>Instance Judiciaire</th>
                </tr>

                <tr v-for="(antecejudi, index) in antecejudis" :key="index">
                    <td>{{ antecejudi.affaire }}</td>
                    <td>{{ antecejudi.quality }}</td>
                    <td>{{ antecejudi.jugement }}</td>
                    <td>{{ antecejudi.instance }}</td>
                    <td>
                        <inertia-link :href="`/antecejudi/edit/${antecejudi.id}`">
                            modifier
                        </inertia-link>
                    </td>
                </tr>
            </table>
            <inertia-link :href="`/antecejudi/create/${this.employe_id}`"
                >Ajouter</inertia-link
            >
        </div>
    </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout";

export default {
    props: ["employe_id"],
    data() {
        return {
            antecejudis: [],
        };
    },
    components: {
        AppLayout,
    },
    methods: {
        getAll() {
            axios
                .get("/api/antecejudi/getall/" + this.employe_id)
                .then((response) => {
                    console.log(response.data);
                    this.antecejudis = response.data;
                })
                .catch((err) => {
                    console.log(err);
                });
        },
    },
    created() {
        this.getAll();
    },
};
</script>
