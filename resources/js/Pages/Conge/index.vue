<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                conge
            </h2>
        </template>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <table class="border-collapse border table-auto">
                <tr>
                    <th>Type</th>
                    <th>Date de Départ</th>
                    <th>Durée</th>
                    <th>Numéro de l'Acte</th>
                    <th>Date de Signature</th>
                </tr>

                <tr v-for="(conge, index) in conges" :key="index">
                    <td>{{ conge.type }}</td>
                    <td>{{ conge.dateD }}</td>
                    <td>{{ conge.duree }}</td>
                    <td>{{ conge.nRef }}</td>
                    <td>{{ conge.dateSign }}</td>

                    <td>
                        <inertia-link :href="`/conge/edit/${conge.id}`">
                            modifier
                        </inertia-link>
                    </td>
                </tr>
            </table>
            <inertia-link :href="`/conge/create/${this.employe_id}`"
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
            conges: [],
        };
    },
    components: {
        AppLayout,
    },
    methods: {
        getAll() {
            axios
                .get("/api/conge/getall/" + this.employe_id)
                .then((response) => {
                    console.log(response.data);
                    this.conges = response.data;
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
