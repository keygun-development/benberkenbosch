<h2 class="text-3xl font-allroundermonument">
    Get in touch
</h2>
<form class="mt-4 md:w-6/12 w-full" method="POST">
    @csrf
    <div>
        <p>
            Name:
        </p>
        <input type="text" name="name" class="c-form__input w-full"/>
    </div>
    <div class="mt-4">
        <p>
            Email:
        </p>
        <input type="email" name="email" class="c-form__input w-full"/>
    </div>
    <div class="mt-4">
        <p>
            Subject:
        </p>
        <select name="subject" class="c-form__input w-full">
            <option>Original Compositions</option>
            <option>Licensing</option>
            <option>Other</option>
        </select>
    </div>
    <div class="mt-4">
        <p>
            Message:
        </p>
        <textarea name="message" class="c-form__input w-full"></textarea>
    </div>
    <div class="flex justify-center mt-4">
        <input type="submit" class="c-button c-button__black cursor-pointer tracking-wider" value="Send" />
    </div>
</form>
