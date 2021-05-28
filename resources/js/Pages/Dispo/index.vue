<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                dispo
            </h2>
        </template>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <table class="border-collapse border table-auto">
                <tr>
                 <th>Type Mvt</th>
                <th>MOTIF</th>
                <th>Durée</th>
                <th>N° act</th>
                <th>Date de signature</th>
                <th>Date d’effet</th>
 
            </tr>

                <tr v-for="(dispo, index) in dispos" :key="index">
                    <td>{{ dispo.typeM }}</td>
                    <td>{{ dispo.motif }}</td>
                    <td>{{ dispo.duree }}</td>
                    <td>{{ dispo.number }}</td>
                    <td>{{ dispo.dateSign }}</td>
                    <td>{{ dispo.dateEffe }}</td>

                    <td>
                        <inertia-link :href="`/dispo/edit/${dispo.id}`">
                            modifier
                        </inertia-link>
                    </td>
                </tr>
            </table>
            <inertia-link :href="`/dispo/create/${this.employe_id}`"
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
            dispos: [],
        };
    },
    components: {
        AppLayout,
    },
    methods: {
        getAll() {
            axios
                .get("/api/dispo/getall/" + this.employe_id)
                .then((response) => {
                    console.log(response.data);
                    this.dispos = response.data;
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
