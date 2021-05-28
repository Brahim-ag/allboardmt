<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                ECHELONS
            </h2>
        </template>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <table class="border-collapse border table-auto">
                <tr></tr>
                <tr>
                <th>Echelon</th>
                <th>Numéro d'Acte</th>
                <th>Date de Signature d'Acte</th>
                <th>Date d'Effet</th>
                <th>Durée</th>
                <th>Type de Commission</th>
                <th>Numéro d'Approbation</th>
                <th>Date de Signature d'Approbation</th>
 
            </tr>

                <tr v-for="(echelon, index) in echelons" :key="index">
                    <td>{{ echelon.echelon }}</td>
                    <td>{{ echelon.number }}</td>
                    <td>{{ echelon.dateSign }}</td>
                    <td>{{ echelon.dateEffe }}</td>
                    <td>{{ echelon.duree }}</td>
                    <td>{{ echelon.typeComm }}</td>
                    <td>{{ echelon.numberApp }}</td>
                    <td>{{ echelon.dateSignApp }}</td>
                    <td>
                        <inertia-link :href="`/echelons/edit/${echelon.id}`">
                            modifier
                        </inertia-link>
                    </td>
                </tr>
            </table>
            <inertia-link :href="`/echelons/create/${this.employe_id}`"
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
            echelons: [],
        };
    },
    components: {
        AppLayout,
    },
    methods: {
        getAll() {
            axios
                .get("/api/echelons/getall/" + this.employe_id)
                .then((response) => {
                    console.log(response.data);
                    this.echelons = response.data;
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
