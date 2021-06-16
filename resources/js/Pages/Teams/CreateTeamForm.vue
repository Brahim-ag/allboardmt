<template>
  <jet-form-section @submitted="createTeam">
    <template #title> Team Details </template>

    <template #description>
      Create a new team to collaborate with others on projects.
    </template>

    <template #form>
      <div class="col-span-6">
        <jet-label value="Team Owner" />

        <div class="flex items-center mt-2">
          <img
            class="w-12 h-12 rounded-full object-cover"
            :src="$page.props.user.profile_photo_url"
            :alt="$page.props.user.name"
          />

          <div class="ml-4 leading-tight">
            <div>{{ $page.props.user.name }}</div>
            <div class="text-gray-700 text-sm">
              {{ $page.props.user.email }}
            </div>
          </div>
        </div>
      </div>

      <div class="col-span-6 sm:col-span-4">
        <jet-label for="name" value="Team Name" />
        <!-- <input id="name" type="text" class="mt-1 block w-full" v-model="form.name" autofocus /> -->
        <select
          id="name"
          class="mt-1 block w-full"
          v-model="form.name"
          autofocus
        >
          <option>-----------</option>
          <option>CNERIB</option>
          <option>CGS</option>
          <option>OPGI</option>
          <option>AADL</option>
          <option>CNL</option>
          <option>FGCMPI</option>
          <option>CNAT</option>
          <option>CNIC</option>
          <option>CTC</option>
          <option>LNHC</option>
          <option>ONV</option>
          <option>ENPI</option>
          <option>ANURB</option>
          <option>GEE</option>
          <option>GRCN</option>
          <option>DUAC</option>
          <option>DL</option>
          <option>DEP</option>
          <option>DUC</option>
          <option>DLEP</option>
          <option>MHUV</option>
          <option>MHU</option>
          <option>EVNSA</option>
          <option>EVNB</option>
          <option>ENVBG</option>
          <option>ENVBG</option>
          <option>EVNM</option>
          <option>EAVDE</option>
          <option>EAVANAM</option>
        </select>

        <input-error :message="form.errors.name" class="mt-2" />
      </div>

      <div class="col-span-6 sm:col-span-4">
        <jet-label for="direction" value="Direction" />
        <!-- <input id="name" type="text" class="mt-1 block w-full" v-model="form.name" autofocus /> -->
        <select
          id="direction"
          class="mt-1 block w-full"
          v-model="form.direction"
          autofocus
        >
          <option>------</option>
          <option>Adrar</option>
          <option>Chlef</option>
          <option>Laghouat</option>
          <option>Oum El Bouaghi</option>
          <option>Batna</option>
          <option>Béjaïa</option>
          <option>Biskra</option>
          <option>Béchar</option>
          <option>Blida</option>
          <option>Bouira</option>
          <option>Tamanrasset</option>
          <option>Tébessa</option>
          <option>Tlemcen</option>
          <option>Tiaret</option>
          <option>Tizi Ouzou</option>
          <option>Alger</option>
          <option>Djelfa</option>
          <option>Jijel</option>
          <option>Sétif</option>
          <option>Saïda</option>
          <option>Skikda</option>
          <option>Sidi Bel Abbès</option>
          <option>Annaba</option>
          <option>Guelma</option>
          <option>Constantine</option>
          <option>Médéa</option>
          <option>Mostaganem</option>
          <option>M'Sila</option>
          <option>Mascara</option>
          <option>Ouargla</option>
          <option>Oran</option>
          <option>El Bayadh</option>
          <option>Illizi</option>
          <option>Bordj Bou Arreridj</option>
          <option>Boumerdès</option>
          <option>El Tarf</option>
          <option>Tindouf</option>
          <option>Tissemsilt</option>
          <option>El Oued</option>
          <option>Khenchela</option>
          <option>Souk Ahras</option>
          <option>Tipaza</option>
          <option>Mila</option>
          <option>Aïn Defla</option>
          <option>Naâma</option>
          <option>Aïn Témouchent</option>
          <option>Ghardaïa</option>
          <option>Relizane</option>
        </select>

        <input-error :message="form.errors.name" class="mt-2" />
      </div>
    </template>

    <template #actions>
      <jet-button
        :class="{ 'opacity-25': form.processing }"
        :disabled="form.processing"
      >
        Create
      </jet-button>
    </template>
  </jet-form-section>
</template>

<script>
import JetButton from "@/Jetstream/Button";
import JetFormSection from "@/Jetstream/FormSection";
import JetInput from "@/Jetstream/Input";
import JetInputError from "@/Jetstream/InputError";
import JetLabel from "@/Jetstream/Label";

export default {
  components: {
    JetButton,
    JetFormSection,
    JetInput,
    JetInputError,
    JetLabel,
  },

  data() {
    return {
      form: this.$inertia.form({
        name: "",
        direction: "",
      }),
    };
  },

  methods: {
    createTeam() {
      this.form.post(route("teams.store"), {
        errorBag: "createTeam",
        preserveScroll: true,
      });
    },
  },
};
</script>
