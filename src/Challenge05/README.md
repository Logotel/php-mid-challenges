# LOGOTEL CHALLANGE 05: DOWNLOAD DATA ⬇️

### Goal

Create the SwapiClient methods.

Methods to be implemented (see Challenge05Test):

- `getPeople(id or null)`: download a
    - list of people in case id is null
    - a single person in case id is filled
    - throw a `PersonNotFoundException` in case of id not found

    Once the list (or single) is downloaded, save the result in a file called `list.json` or `{id}.json` (where id is the id provided).

- `for(Person $person)`: set a person to be used to get other data (create Person class)
- `getPlanet()`: callable only if a person has been set, should return a planet Object (to be created)

Resource: [https://swapi.dev/](https://swapi.dev/)

Feel free to use a package to handle the http call.

### What we will be focused on

- Code style
- Corde readability
- Comments (if necessary)
- Optimization
- SOLID principles
- The test should pass

### Test

Test with instruction in root directory.
