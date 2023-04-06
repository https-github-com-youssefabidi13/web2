<div>
    <div class="flex flex-col">
        <label class="leading-loose">Categorie</label>
        <select wire:model="categorieId" name="category_id" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600">
            <option value="">Choisir categorie</option>
            @foreach ($categories as $categorie )
                <option value="{{ $categorie->id }}">{{ $categorie->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="flex flex-col">
        <label class="leading-loose">Objet Correspondant</label>
        <select wire:model="objectId" name="object_id" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600">
            <option value="">Choisir l'objet</option>
            @foreach ($objects as $object )
                <option value="{{ $object->id }}">{{ $object->title }}</option>
            @endforeach
        </select>
    </div>
</div>
