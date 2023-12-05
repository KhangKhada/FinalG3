<div class="w-1/4 md:w-1/2">
    <label class="block text-base font-medium leading-6 text-gray-900"
        for="{{ $name }}">{{ $label }}</label>
    <select
        class="w-full mt-1 block rounded-md border-gray-300 shadow-sm ocus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50 delay-[10ms] transition-all ease-in-out"
        name="{{ $name }}" id="{{ $name }}" required {{ $attributes }}>
        {{ $slot }}
    </select>
    @error($name)
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
