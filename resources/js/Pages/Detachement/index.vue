<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                detachement
            </h2>
        </template>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <table class="border-collapse border table-auto">
               <tr>
            <th>Administration d'Origine</th>
            <th>Administration d'Accueil</th>
            <th width='40%'>Motif </th>
            <th>Nature</th>
            <th>Numéro</th>
            <th>Date de Signature</th>
            <th>Date d'Effet</th>
            <th>Date de Fin</th>
        </tr>
            <tr v-for="(detachement, index) in detachements" :key="index">
                <td>{{detachement.admin}}</td>
                <td>{{detachement.to}}</td>
                <td>{{detachement.motif}}</td>
                <td>{{detachement.nature}}</td>
                <td>{{detachement.Number}}</td>
                <td>{{detachement.dateSignature}}</td>
                <td>{{detachement.dateStart}}</td>
                <td>{{detachement.dateEnd}}</td>
                <td>
                        <inertia-link :href="`/detachement/edit/${detachement.id}`">
                            modifier
                        </inertia-link>
                    </td>
                </tr>
            </table>
            <inertia-link :href="`/detachement/create/${this.employe_id}`"
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
            detachements: [],
        };
    },
    components: {
        AppLayout,
    },
    methods: {
        getAll() {
            axios
                .get("/api/detachement/getall/" + this.employe_id)
                .then((response) => {
                    console.log(response.data);
                    this.detachements = response.data;
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
