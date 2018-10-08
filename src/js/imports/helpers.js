export default class Helpers {
    static JSONParse(data) {
        return typeof data === 'string' ? JSON.parse(data): data;
    }
}