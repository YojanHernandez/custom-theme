const getFormData = (id) => {
    const form = document.getElementById(id);
    const formData = new FormData(form);
    const data = {};
    formData.forEach((value, key) => {
        data[key] = value;
    });
    return data;
}

const sendFormData = async (id) => {
    const data = getFormData(id);
    const response = await fetch('/wp-admin/admin-ajax.php', {
        method: 'POST',
        body: JSON.stringify(data),
    });
    const result = await response.json();
    return result;
}

export { getFormData, sendFormData };