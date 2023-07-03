The require_once expression is identical to require except PHP will check if the file has already been included, and if
so, not include (require) it again.

See the include_once documentation for information about the _once behaviour, and how it differs from its non _once
siblings.

The include_once statement includes and evaluates the specified file during the execution of the script. This is a
behavior similar to the include statement, with the only difference being that if the code from a file has already been
included, it will not be included again, and include_once returns true. As the name suggests, the file will be included
just once.

include_once may be used in cases where the same file might be included and evaluated more than once during a particular
execution of a script, so in this case it may help avoid problems such as function redefinitions, variable value
reassignments, etc.

See the include documentation for information about how this function works.