<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Cessation
            </h2>
        </template>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <table class="border-collapse border table-auto">
                <tr>
                  <th>Motif</th>
                <th>Type d'Acte</th>
                <th>Date d'Effet</th>
                <th>Numéro d'Acte</th>
                <th>Date de Signature</th>
                <th>Numéro de Visa CF</th>
                <th>Date de Visa CF</th>
 
            </tr>

                <tr v-for="(cessation, index) in cessations" :key="index">
                   <td>{{ cessation.motif }}</td>
                <td>{{ cessation.typeA }}</td>
                <td>{{ cessation.dateA }}</td>
                <td>{{ cessation.nRef }}</td>
                <td>{{ cessation.dateSign }}</td>
                <td>{{ cessation.numberCf }}</td>
                <td>{{ cessation.dateEffeCF }}</td>

                    <td>
                        <inertia-link :href="`/cessation/edit/${cessation.id}`">
                            modifier
                        </inertia-link>
                    </td>
                </tr>
            </table>
            <inertia-link :href="`/cessation/create/${this.employe_id}`"
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
            cessations: [],
        };
    },
    components: {
        AppLayout,
    },
    methods: {
        getAll() {
            axios
                .get("/api/cessation/getall/" + this.employe_id)
                .then((response) => {
                    console.log(response.data);
                    this.cessations = response.data;
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
